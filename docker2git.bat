@echo off
set PATHGIT=D:\Praca\SUIT\SuiteCRM-Core\app
set DOCKER=eb96680cd984cf81eb0bc2bdee252755cb0bc765d77c35946791a48b9092ac76
 
rd /s /q %PATHGIT%\public\legacy\custom\Extension
rd /s /q %PATHGIT%\public\legacy\custom\modules
rd /s /q %PATHGIT%\public\legacy\custom\themes
rd /s /q %PATHGIT%\public\legacy\include\SugarObjects\templates\incident
rd /s /q %PATHGIT%\public\legacy\modules\it_Incidents
rd /s /q %PATHGIT%\public\legacy\modules\it_Claims
rd /s /q %PATHGIT%\public\legacy\modules\it_Complaiants
rd /s /q %PATHGIT%\public\legacy\modules\it_serviceElectronic
::rd /s /q %PATHGIT%\public\legacy\service

@echo on
@echo ---------------
@echo custom
@echo off
docker cp  %DOCKER%:/bitnami/suitecrm/public/legacy/custom/Extension %PATHGIT%\public\legacy\custom 
docker cp  %DOCKER%:/bitnami/suitecrm/public/legacy/custom/modules %PATHGIT%\public\legacy\custom
docker cp  %DOCKER%:/bitnami/suitecrm/public/legacy/custom/themes %PATHGIT%\public\legacy\custom


@echo on
@echo ---------------
@echo include
@echo off::
docker cp  %DOCKER%:/bitnami/suitecrm/public/legacy/include/SugarObjects/templates/incident  %PATHGIT%\public\legacy\include\SugarObjects\templates\incident

@echo on
@echo ---------------
@echo modules
@echo off
docker cp  %DOCKER%:/bitnami/suitecrm/public/legacy/modules/it_Incidents %PATHGIT%\public\legacy\modules
docker cp  %DOCKER%:/bitnami/suitecrm/public/legacy/modules/it_Claims %PATHGIT%\public\legacy\modules
docker cp  %DOCKER%:/bitnami/suitecrm/public/legacy/modules/it_Complaiants  %PATHGIT%\public\legacy\modules
docker cp  %DOCKER%:/bitnami/suitecrm/public/legacy/modules/it_serviceElectronic  %PATHGIT%\public\legacy\modules

::@echo on
::@echo ---------------
::@echo service
::@echo off
::docker cp  %DOCKER%:/bitnami/suitecrm/public/legacy/service %PATHGIT%\public\legacy





