README csc309 A2
Lorenz Breu - g1ight
Cleon Yau - c3yaucle

index.php
---

A customer can select a date and either a movie or a venue.
Tickets cannot be bought for past dates or the current date.
Tickets cannot be bought for over 2 weeks in the future.

There are two links on the bottom "Show Movies" and "Show Theaters"
These links list the available movies and venues respectively.

Clicking the submit button after selecting a date and a movie or venue will execute a search for movies that match the criteria.
One may then find an appropriate showing and write the corresponding ShowID into the Showtime ID: textbox.

Submitting the ShowID will bring the customer to the seat selection screen, where the customer can select a seat from a model of the theater.

Completing the seat selection brings the customer to checkout, where they will enter their billing information and confirm their ShowId..

Completeing the form enters a ticket into our database, and brings the customer to the receipt screen where their ticket information is displayed as well as an option to print the page.


admin.php
---

This is the admin page for the site, it contains some useful links for site administration:

Show Movies - Displays what movies are currently available.
Show Tickets - Displays information about all tickets purchased.
Show Showtimes - Displays information on all showtimes.
Populate Database - Populates the database.
Delete Database - Deletes the database.
Delete Tickets - Deletes all tickets.
