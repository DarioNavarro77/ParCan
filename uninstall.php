[21-Jan-2024 00:10:31 UTC] PHP Warning:  require_once(/web/htdocs/www.paralelo.it/home/clienti/canto/wp-content/plugins/cantoparalelo-gpt/widgets/widget-canto-paralelo.php): Failed to open stream: No such file or directory in /web/htdocs/www.paralelo.it/home/clienti/canto/wp-content/plugins/cantoparalelo-gpt/cantoparalelo.php on line 17
[21-Jan-2024 00:10:31 UTC] PHP Fatal error:  Uncaught Error: Failed opening required '/web/htdocs/www.paralelo.it/home/clienti/canto/wp-content/plugins/cantoparalelo-gpt/widgets/widget-canto-paralelo.php' (include_path='.:/php8.0/lib/php') in /web/htdocs/www.paralelo.it/home/clienti/canto/wp-content/plugins/cantoparalelo-gpt/cantoparalelo.php:17
Stack trace:
#0 /web/htdocs/www.paralelo.it/home/clienti/canto/wp-settings.php(428): include_once()
#1 /web/htdocs/www.paralelo.it/home/clienti/canto/wp-config.php(108): require_once('...')
#2 /web/htdocs/www.paralelo.it/home/clienti/canto/wp-load.php(50): require_once('...')
#3 /web/htdocs/www.paralelo.it/home/clienti/canto/wp-admin/admin.php(34): require_once('...')
#4 /web/htdocs/www.paralelo.it/home/clienti/canto/wp-admin/post.php(12): require_once('...')
#5 {main}
  thrown in /web/htdocs/www.paralelo.it/home/clienti/canto/wp-content/plugins/cantoparalelo-gpt/cantoparalelo.php on line 17
[21-Jan-2024 00:10:31 UTC] PHP Notice:  La funzione is_embed è stata richiamata <strong>in maniera scorretta</strong>. I tag condizionali di una query non funzionano prima che la query sia stata eseguita. Prima dell'esecuzione restituiscono sempre il valore False. Leggi <a href="https://wordpress.org/support/article/debugging-in-wordpress/">Debugging in WordPress</a> per maggiori informazioni. (Questo messaggio è stato aggiunto nella versione 3.1.0.) in /web/htdocs/www.paralelo.it/home/clienti/canto/wp-includes/functions.php on line 5833
[21-Jan-2024 00:10:31 UTC] PHP Notice:  La funzione is_search è stata richiamata <strong>in maniera scorretta</strong>. I tag condizionali di una query non funzionano prima che la query sia stata eseguita. Prima dell'esecuzione restituiscono sempre il valore False. Leggi <a href="https://wordpress.org/support/article/debugging-in-wordpress/">Debugging in WordPress</a> per maggiori informazioni. (Questo messaggio è stato aggiunto nella versione 3.1.0.) in /web/htdocs/www.paralelo.it/home/clienti/canto/wp-includes/functions.php on line 5833
