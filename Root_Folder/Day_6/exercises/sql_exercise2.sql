-- * A customer, a bookseller, sets up an online business to sell books.
-- * He wants a website where:
-- * Users can register and create an account.
-- * Users can view the different books.
-- * Read the biography of each author.
-- * Order some books
-- * Find their orders history.

-- * Part 1 - Modeling of the B.D.D. :
-- ? Determine what data the customer needs to save in the database.
-- TODO USERS: First & Last Name/Email/Password/Favorites/Order History
-- TODO ORDER: Order #/Payment Method/Billing Address/Name of Buyer/Shipping Address/Payment Information
-- TODO BOOKS: Qty/Title/Genre/Author/Synopsis/IMG/Release Date
-- TODO AUTHORS: First & Last Name/D.O.B./Bio/IMG

-- ? Determine the entities (tables) that result from the data.
-- TODO USERS TABLE / ORDER TABLE / BOOKS TABLE / AUTHOR TABLE

-- ? Identify the relationships between the different tables.
-- TODO USERS can have MANY ORDERS (1 : M) / AN ORDER can only have ONE USER (1 : 1)
-- TODO USERS can have MANY BOOKS (1 : M) / A BOOK can only have ONE USER (1 : 1)
-- TODO ORDERS can have MANY BOOKS (1 ; M) / A BOOK can only have ONE ORDER (1 : 1)
-- TODO AUTHORS can have MANY BOOKS (1 : M) / A BOOK can only have ONE AUTHOR (1 : 1)

-- ? Identify the cardinalities of these relationships.
-- TODO USERS: HIGH CARDINALITY - Name/Email/Password; NORMAL CARDINALITY - Order History; LOW CARDINALITY - Favorites
-- TODO ORDER: HIGH CARDINALITY - Billing Address/Shipping Address/Payment Information; NORMAL CARDINALITY - Order #/Name of Buyer; LOW CARDINALITY - None 
-- TODO BOOKS: HIGH CARDINALITY - Author/Synopsis/IMG; NORMAL CARDINALITY - Qty/Title; LOW CARDINALITY - Genre
-- TODO AUTHORS: HIGH CARDINALITY - Name/Bio/IMG; NORMAL CARDINALITY - D.O.B.; LOW CARDINALITY - none

-- ? Identify all the attributes (for each table).
-- TODO USERS: First & Last Name/Email/Password/Favorites/Order History
-- TODO ORDER: Order #/Payment Method/Billing Address/Name of Buyer/Shipping Address/Payment Information
-- TODO BOOKS: Qty/Title/Genre/Author/Synopsis/IMG/Release Date
-- TODO AUTHORS: First & Last Name/D.O.B./Bio/IMG

-- ? Create the relational diagram of the DB
-- TODO https://drive.google.com/file/d/1QXEOm_SabzjoYOiGA4GcsJ4UELFZAh82/view?usp=sharing

-- * Part 2 - SQL Queries:
-- * Write all queries:
-- ? View all books.
SELECT * FROM books;

-- ? View all authors.
SELECT * from authors;

-- ? View books sorted by release date.
SELECT title from books ORDER BY release_date; 

-- ? View all books with their respective author.
SELECT title, author FROM books;

-- ? View books sorted by authors.
SELECT * FROM books ORDER BY author;

-- ? Display all books that contain the letter 'x' (replace x with what you want)
SELECT title FROM books WHERE title LIKE '%x%';

-- ? Show all the books that came out in 2018 (replace the year with what you want)
SELECT title FROM books WHERE release_date LIKE '2018%';

-- ? Show all books whose author is 'Albert Camus' (replace the author by the one you want)
SELECT title FROM books WHERE author = 'Albert Camus';

-- ? Display all books whose author's name contains the letter 'x' (replace x with what you want)
SELECT title FROM books WHERE author LIKE '%x%';

-- ? Retrieve all orders already placed.
SELECT * FROM orders;

-- ? Retrieve all orders already placed with the user's info.
SELECT *
FROM orders
INNER JOIN users ON users.username=orders.orderNum 
WHERE users.username = 'Bobby Spencer';

-- ? Get all the commands of the user 'john' (replace by what you want)
SELECT * from users WHERE name = 'john';

-- ? Per user, recover the total sum of orders.
SELECT COUNT(orderNum)
FROM orders
INNER JOIN users ON users.username=orders.orderNum 
GROUP BY users.username;

-- ? By user, retrieve the list of authors of which he already buy a book.
SELECT COUNT(authorName)
FROM authors
INNER JOIN users ON users.username=orders.orderNum 
WHERE users.orderHistory = authors.authorName;
GROUP BY users.username;
