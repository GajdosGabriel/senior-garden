@echo off
cd /d "%~dp0"
where php >nul 2>nul
if errorlevel 1 (
  echo PHP nie je nainstalovane alebo nie je v PATH.
  echo Nainstalujte XAMPP alebo PHP a skuste znova.
  pause
  exit /b
)
start "" http://localhost:8000
echo Server bezi na http://localhost:8000  (zatvorenim okna ho vypnete)
php -S localhost:8000
pause
