# Page.Counter.and.Visitor.Log

On each page you want to log visitor data at the top of the page add $page = "example"; whatever you name the page is the name of the log file that will be created and then 
also include the require "includes/counter.inc.php"; file , to show the count for that page include the if statement and require "includes/show.count.inc.php"; file like in example.php .  If you leave $page = ""; blank it will log the visitors info to log.txt but won't create a counter for that page.
