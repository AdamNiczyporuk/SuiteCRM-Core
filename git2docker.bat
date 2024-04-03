@echo off
set PATHGIT=D:\Praca\SUIT\SuiteCRM-Core\app
set DOCKER=a9d68624fad714062293466b0cd2c3ec4e9f7e9a64bc7f6bc1906ffebd0a4498
 
docker exec -it %DOCKER% rm -rf /bitnami/suitecrm/public/legacy/custom/Extension
docker exec -it %DOCKER% rm -rf /bitnami/suitecrm/public/legacy/custom/modules
docker exec -it %DOCKER% rm -rf /bitnami/suitecrm/public/legacy/custom/themes

docker exec -it %DOCKER% rm -rf /bitnami/suitecrm/public/legacy/include/SugarObjects/templates/incident

docker exec -it %DOCKER% rm -rf /bitnami/suitecrm/public/legacy/modules/it_Incidents
docker exec -it %DOCKER% rm -rf /bitnami/suitecrm/public/legacy/modules/it_Claims
docker exec -it %DOCKER% rm -rf /bitnami/suitecrm/public/legacy/modules/it_Complaiants
::docker exec -it %DOCKER% rm -rf /bitnami/suitecrm/public/legacy/service

@echo on
@echo ---------------
@echo custom
@echo off
docker cp %PATHGIT%\public\legacy\custom\Extension %DOCKER%:/bitnami/suitecrm/public/legacy/custom/
docker cp %PATHGIT%\public\legacy\custom\modules %DOCKER%:/bitnami/suitecrm/public/legacy/custom/
docker cp %PATHGIT%\public\legacy\custom\themes %DOCKER%:/bitnami/suitecrm/public/legacy/custom/

@echo on
@echo ---------------
@echo include
@echo off
docker cp %PATHGIT%\public\legacy\include\SugarObjects\templates\incident %DOCKER%:/bitnami/suitecrm/public/legacy/include/SugarObjects/templates/incident

@echo on
@echo ---------------
@echo modules
@echo off
docker cp %PATHGIT%\public\legacy\modules\it_Incidents %DOCKER%:/bitnami/suitecrm/public/legacy/modules/it_Incidents
docker cp %PATHGIT%\public\legacy\modules\it_Claims %DOCKER%:/bitnami/suitecrm/public/legacy/modules/it_Claims
docker cp %PATHGIT%\public\legacy\modules\it_Complaiants %DOCKER%:/bitnami/suitecrm/public/legacy/modules/it_Complaiants

::@echo on
::@echo ---------------
::@echo service
::@echo off
::
::docker cp %PATHGIT%\public\legacy\service %DOCKER%:/bitnami/suitecrm/public/legacy/
::@echo off

docker exec -it %DOCKER% sh -c "find /bitnami/suitecrm/public/legacy -type f -exec chown daemon {} + -o -type d -exec chown -R daemon {} +"
::docker exec sh -c "apt-get update -y && apt-get install mc"





