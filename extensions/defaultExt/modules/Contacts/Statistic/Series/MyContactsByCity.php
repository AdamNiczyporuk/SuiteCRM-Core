<?php 

namespace App\Extensions\DefaultExt\Modules\Contacts\Statistic\Series;

use App\Extensions\DefaultExt\Modules\Contacts\Statistic\Series\MyContactsByCity;
use App\Data\LegacyHandler\ListDataQueryHandler;
use App\Engine\LegacyHandler\LegacyHandler;
use App\Engine\LegacyHandler\LegacyScopeState;
use App\Module\Service\ModuleNameMapperInterface;
use App\Statistics\Entity\Statistic;
use App\Statistics\Model\ChartOptions;
use App\Statistics\Service\StatisticsProviderInterface;
use App\Statistics\StatisticsHandlingTrait;
use BeanFactory;
use SugarBean;
use Symfony\Component\HttpFoundation\Session\SessionInterface;



class MyContactsByCity extends LegacyHandler implements StatisticsProviderInterface
{ 
    $GLOBALS['log'] = LoggerManager::getLogger();
    use StatisticHandlingTrait; 

    public const Key = 'my_contacts_by_city';
     /**
     * @var ListDataQueryHandler
     */
    private $queryHandler;

    /**
     * @var ModuleNameMapperInterface
     */
    private $moduleNameMapper;

    /**
     * LeadDaysOpen constructor.
     * @param string $projectDir
     * @param string $legacyDir
     * @param string $legacySessionName
     * @param string $defaultSessionName
     * @param LegacyScopeState $legacyScopeState
     * @param ListDataQueryHandler $queryHandler
     * @param ModuleNameMapperInterface $moduleNameMapper
     * @param SessionInterface $session
     */
    public function __construct(
        string $projectDir,
        string $legacyDir,
        string $legacySessionName,
        string $defaultSessionName,
        LegacyScopeState $legacyScopeState,
        ListDataQueryHandler $queryHandler,
        ModuleNameMapperInterface $moduleNameMapper,
        SessionInterface $session
    ) {
        parent::__construct($projectDir, $legacyDir, $legacySessionName, $defaultSessionName, $legacyScopeState, $session);
        $this->queryHandler = $queryHandler;
        $this->moduleNameMapper = $moduleNameMapper;
    }

     /**
     * @inheritDoc
     */
    public function getHandlerKey(): string
    {
        return $this->getKey();
    }

    /**
     * @inheritDoc
     */
    public function getKey(): string
    {
        return self::KEY;
    }

    /**
     * @inheritDoc
     */
    public function getData(array $query): Statistic
    {
        $this->init();
        $this->startLegacyApp();

        global $current_user;

        // Validacja
        [$module, $id, $criteria, $sort] = $this->extractContext($query);

        if (empty($module) || $module !== 'contacts') {
            return $this->getEmptySeriesResponse(self::KEY);
        }

        

        $legacyName = $this->moduleNameMapper->toLegacy($module);
        $bean = $this->getBean($legacyName);

        if (!$bean instanceof SugarBean) {
            return $this->getEmptySeriesResponse(self::KEY);
        }


        //Get Base Query
        $query = $this->queryHandler->getQuery($bean, $criteria, $sort);

        $query = $this->generateQuery($query,$current_user->id);

        $result = $this->runQuery($query, $bean);

        // Output Response

        $nameField = 'primary_address_city';
        $valueField = 'total';

        $series = $this->buildSingleSeries($result, $nameField, $valueField);

        $chartOptions = new ChartOptions();
        $chartOptions->yAxisTickFormatting = true;

        $statistic = $this->buildSeriesResponse(self::KEY, 'int', $series, $chartOptions);

        $this->close();

        return $statistic;
    }

    /**
     * @param string $legacyName
     * @return bool|SugarBean
     */
    protected function getBean(string $legacyName)
    {
        return BeanFactory::newBean($legacyName);
    }

    /**
     * @param array $query
     * @param $bean
     * @return array
     */
    protected function runQuery(array $query, $bean): array
    {
        // send limit -2 to not add a limit
        return $this->queryHandler->runQuery($bean, $query, -1, -2);
    }

    /**
     * @param array $query
     * @return array
     */
    protected function generateQuery(array $query): array
    {
        $query['select'] = 'SELECT contacts.primary_address_city, COUNT(contacts.primary_address_city) as total';
        $query['where'] .= ' AND contacts.primary_address_city is not null AND contacts.assigned_user_id ='. "'" .$db->quote($current_user->id) . "'";
        $query['order_by'] = '';
        $query['group_by'] = ' GROUP BY  contacts.primary_address_city DESC';
        LoggerManager::getLogger()->fatal('$query');
        return $query;
    }

}