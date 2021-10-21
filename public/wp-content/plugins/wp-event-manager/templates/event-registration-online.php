<p>
    Gratuluję próbujesz właśnie zarejestrować się przy pomocy metody: <?php echo $register->method;?>
</p>
<p>
    Teraz wystarczy tutaj zaimplementować strzał do bazy danych z id użytkownika
</p>
<p>
    By jednak to zrobić najpierw trzeba:
</p>
<ul>
    <li>Utworzyć tabelę łącznikową w bazie danych</li>
    <li>sprawdzić czy użytkowik jest zalogowany</li>
    <li>jeśli tak, to wstawić akcję zapisu do tabeli łącznikowej bazy danych z id użytkowika oraz jakimś identyfikatorem wydarzenia
        <ul>
            <li>opracować strukturę i określić z perspektywy użytkowania bazy danych kolumny</li>
            <li>opracować klasę służącą do komunikacji z tą nową tabelą bazy danych</li>
            <li>podpiąć listowanie użytkowników powiązanych z określonym wydarzeniem przy pomocy tej klasy do szablonu wydarzenia</li>
            <li>napisać triggery do sprzątania zapisań na usunięte wydarzenie z bazy danych</li>
        </ul>
    </li>
    <li>jeśli nie, to wyświetlić informację lub przekierować do logowania?
        <ul>
            <li>A jeśli przekierujemy do logowania to zadbać o powrotny URL/autoamtyczne uruchomienie skryptu?</li>
            <li>A jeśli użytkownik nie ma konta to zadbać o przekierowanie do rejestracji z odpowiednim przekierowaniem z powrotem po udanej?</li>
        </ul>
    </li>
    <li></li>
</ul>