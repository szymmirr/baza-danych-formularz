# Baza Danych + Formularz
Stworzona w 2015 roku prosta strona internetowa z formularzem dodającym dane do bazy i możliwością przeglądania zawartości bazy w przeglądarce.

Do działania potrzebny będzie np. [XAMPP](https://www.apachefriends.org/pl/index.html). Wszystkie [pliki](https://github.com/szymmirr/baza-danych-formularz/archive/master.zip) należy wrzucić do xampp\htdocs, a w [panelu kontrolnym](https://devtuts.butlerccwebdev.net/testserver/xampp-control-panel.png) uruchomić moduły Apache i MySQL. Przy użyciu [phpMyAdmin](http://127.0.0.1/phpmyadmin/server_databases.php?server=1) tworzymy bazę o nazwie *sprbaza*, następnie wklejamy kod z [script.sql](https://github.com/szymmirr/baza-danych-formularz/blob/master/script.sql) do [konsoli](http://127.0.0.1/phpmyadmin/server_sql.php) i klikamy *Go*. Stronę możemy przetestować na [localhost](http://127.0.0.1/).

![Rejestracja](https://user-images.githubusercontent.com/12998256/87269622-fcfcff00-c4cd-11ea-8aa9-5465d747b565.gif)

![baza](https://raw.githubusercontent.com/szymmirr/baza-danych-formularz/master/baza.png)
