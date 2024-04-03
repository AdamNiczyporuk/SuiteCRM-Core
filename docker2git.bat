@echo off
set PATHGIT=D:\Praca\SUIT\SuiteCRM-Core\app
set DOCKER=a9d68624fad714062293466b0cd2c3ec4e9f7e9a64bc7f6bc1906ffebd0a4498
 
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





