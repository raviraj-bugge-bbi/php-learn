<?php
//-----------------------------------------------------------------------------------------
echo "<h1>--The PHP Date() Function-</h1><br><br>";
//The PHP date() function formats a timestamp to a more readable date and time.

/*****************************/
echo "<h3>--Get a Date--</h3>";

//Syntax : date(format,timestamp)

// d - Represents the day of the month (01 to 31)
// m - Represents a month (01 to 12)
// Y - Represents a year (in four digits)
// l (lowercase 'L') - Represents the day of the week

echo "Date is" . date("d/m/y");

/*****************************/
echo "<h3>--Get a Time--</h3>";

// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)

echo "Time is" . date(" h:i:s a");

/*****************************/
echo "<h3>--Get & Set Timezone--</h3>";

echo date("timezone");

/*****************************/
echo "<h3>--Create a Date With mktime()--</h3>";

// The optional timestamp parameter in the date() function specifies a timestamp. If omitted, the current date and time will be used (as in the examples above).

// The PHP mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.

// Syntax : mktime(hour, minute, second, month, day, year)

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

/*****************************/
echo "<h3>--Create a Date From a String With strtotime()--</h3>";
// The PHP strtotime() function is used to convert a human readable date string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).

// Syntax : strtotime(time, now)

$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>