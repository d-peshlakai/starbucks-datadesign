<!DOCTYPE html>
<htmL>

	<meta charset="utf-8">
	<title>
		Starbucks Datadesign
	</title>
	<h1>Starbucks-Datadesign</h1>
	<body>
		<h2>
			Persona
		</h2>
		<p>The site assigned was Starbucks web page. The customer is a 26 year old college 	student who loves coffee. The site 	is designed to purchase Starbucks products.  The purpose would be the coffee drinker to buy her favorite coffee and to rate the particular coffee an integer from 1-5, having 5 being the highest and most favorite. </p>
		<h2>Use Case</h2>
		<p>Goal: As a Starbucks buyer and coffee drinker, she is rating her top favorite coffee  product by number of stars.</p>
		<ol>
			<li>What: Use of the Windows 7 computer desktop.
			</li>
			<li>Who: A female customer who loves coffee and needs it daily to function has a choice of the many item types, the bag 				count, price, roast type, and the 	identification of the highly rated product of coffee.</li>
			<li>Why: The coffee drinker rates her most favorite coffee, and from there forms an entity for coffee. It reflects 				off of the customers persona as a coffee lover and shows she admires the coffee product.</li>
		</ol>

		<h2>Interaction Flow</h2>
		<p>The goal is the female buyer who chooses to rate her favorite product. The logical containers would involve: customer, order and product, and vendor.  The customer would start off in the following steps to purchase the coffee of choice:</p>
		<ol>
			<li>Entering URL site</li>
			<li>Clicking on category titled "Coffee"</li>
			<li>Selecting from category the coffee product of choice.</li>
			<li>Select the certain quantity.</li>
			<li>Select one of the options: blonde, medium, or dark</li>
			<li>Select the specified description.</li>
			<li>Add choice to checkout cart link</li>
			<li>Enter billing information and purchasing information.</li>
			<li>Customer rates the most favorite coffee product.</li>
		</ol>

		<h2>Conceptual Model</h2>
		<p>
			Relationships
			<ol>
		<p>The important data models required would be the customer to reveal the essential data about the customer. Coffee containing attributes of description, type item, roast, count, price and name. All these to obtain coffeeId as the primary key. When coffee is then rated by the customer. The action to rate opens a many to many relationship with the weak entity of starRating. Then leaving the starRatingCustomerId and starRatingCoffeeId as the foreign keys. They are the collection/list of identifying the customers leaving the rates and identifying the highest rate coffee product. </p>

			<li>Customer can rate the coffee product he/she likes from 0 to 5 with 5 being the most liked.</li>
			<li>Many to many relation would have the starRating of customers the weak 				entity.
			</li>
			<li>The weak entity would be the starRating that links the customer and coffee together. It also opens foreign keys star rating of customer and star rating the coffee identification. </li>
			<img src="pics/star-erd.png" alt="starbucks"/>

	</body>
</htmL>