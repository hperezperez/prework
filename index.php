<!DOCTYPE html>
<html lang="en">

	<title>Data Design Proyect Phase 1 </title>
	<head>
		<meta charset="utf-8">
		<title>Data Design Proyect Phase 1 </title>
	</head>
	<body>
		<div class="container">
			<header>
				<h1> JOSE SANCHEZ Persona</h1>
			</header>
			<p> He is school teacher. He likes extreme sports. He  likes speed.</P>
			<p>He is single with one kid and one dog. He travels in the summer.</p>
			<img src="pictures/pictures/actionfoto.jpg" alt="action">
			<h3>Use cases</h3>
			<ul>

				<li>The first use case is A person rent a car by accesing the site, deciding the price and clicking.</li>
				<li>The  second use case is A person rent a car  by accessing  the site,reserve the car later rent the car</li>
				<li> The third use case is a person try to rent a car by accesing the site make reservation but never reserve it </li>
			</ul>
			<h1>Entity Relationship Diagram</h1>
			<img src="pictures/pictures/dibujo1.jpg"alt="diagram">
			<div clas="sql">

				<p>DROP TABLE IF EXISTS renter; </p>
				<p>DROP TABLE IF EXISTS car_rented; </p>
				<P>DROP TABLE IF EXISTS reservation;</P>

				<P> </P>
				<p>CREATE TABLE renter(</p>
				<p>renterid       INT UNSIGNED AUTO-INCREMENTS NOT NULL</p>
				<p>picklocation   VARCHAR(32)</p>
				<P>returnloation  VARCHAR(32)</P>
				<P>pickdate       DATE NOT NULL</P>
				<P>returndate     DATE NOT NULL</P>
				<P>picktime       TIMESTAMP NOT NULL</P>
				<P>returntime     TIMESTAMP NOT NULL</P>
				<P>unique( )</P>
				<p>unique( )</p>
				<p>PRIMARY KEY (renter id)</>
				<P>);</P>
				<p>CREATE TABLE car-rented (</p>
				<p>car_rentedid INT UNSIGNED AUTO-INCREMENTS NOT NULL</p>
				<P>renterid     INT UNSIGNED NOT NULL</P>
				<P>price        DECIMAL(5,2)  NOT NULL</P>
				<P>provider     VARCHAR (32)  NOT NULL</P>
				<P>location     VARCHAR (32)  NOT NULL</P>
				<p>INDEX (renterid)</p>
				<p>FOREIGN KEY (renterid)  REFERENCES renter (renterid),</p>
				<p> PRIMARY KEY  (car_rented id)</p>
				<p>);</p>
				<p>    </p>
				<p>CREATE TABLE reservation ( </p>
				<P> renterid INT UNSIGNED NOT NULL,</P>
				<P>reservationid INT UNSIGNED NOT NULL,</P>
				<P>reservationloc VARCHAR (32)</P>
				<P>reservationprice decimal(5,2)</P>
				<P> INDEX (renterid) REFERENCES Rresevation (renterid)</P>
				<p> FOREIGN KEY (renterid)</p>
				<P> PRIMARY KEY (	reservationid)</P>
				<p> </p>



			</div>
	</body>
</html>


