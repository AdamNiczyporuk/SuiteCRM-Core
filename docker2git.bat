@echo off
set PATHGIT=I:\Gitlab\SuiteCRM-Core
set DOCKER=cb3f91d4a3d229f89817043a702e8d914ea70ca31b5cc5ed867cecea84435017
 
rd /s /q %PATHGIT%\public\legacy\custom\Extension
rd /s /q %PATHGIT%\public\legacy\custom\modules
rd /s /q %PATHGIT%\public\legacy\custom\themes
rd /s /q %PATHGIT%\public\legacy\include\SugarObjects\templates\incident
rd /s /q %PATHGIT%\public\legacy\modules\it_Incidents
rd /s /q %PATHGIT%\public\legacy\modules\it_Claims
rd /s /q %PATHGIT%\public\legacy\modules\it_Complaiants
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


::@echo on
::@echo ---------------
::@echo service
::@echo off
::docker cp  %DOCKER%:/bitnami/suitecrm/public/legacy/service %PATHGIT%\public\legacy





