<!DOCTYPE html>
<htmL>
	<title>
		Starbucks Datadesign
	</title>
	<body>
		<h1>
			Persona
		</h1>
		<p>The site assigned was Starbucks web page. The user is a 26 year old college student who loves coffee. The purpose would be for a usual customer purchasing the Verismo pods.</p>
		<h1>Use Case</h1>
		<p>Goal: As a Starbucks buyer, she want the pods for her coffee maker.</p>
		<ol>
			<li>What: Use of the Windows 7 computer.
			</li>
			<li>Who: Customer who loves coffee and needs it daily to function. Her favorite coffee type form of choice for coffee maker to her convenience.</li>
			<li>Why: She want to buy her favorite tasting house blend coffee. It reflects off of the customers persona as a coffee lover and shows she wants something fast and easy.</li>
		</ol>
		<h1>Interaction Flow</h1>
		<p>The goal would be to satisfy the customer's preference and mapping out the data at rest. The logical containers would involve: customer, order and product, and vendor.  The user would start off in the following steps to purchase the coffee of choice:</p>
		<ol>
			<li>
				Entering URL site
			</li>
			<li>
				Clicking on category titled "Coffee"
			</li>
			<li>
				Selecting from catergory of the Pods form.
			</li>
			<li>Select the certain quantity.</li>
			<li>Select one of the options: blonde, medium, or dark</li>
			<li>Add choice to checkout cart link</li>
			<li>Enter billing information and purchasing information.</li>
		</ol>

		<h1>Conceptual Model</h1>
		<p>
			Relationships
			<ol>
		<p>One to many: entry can have many entities. customerFe would be the primary key and starRating would be a foreign key.</p>
			<li>CustomerF can buy many pods which reflects the one to many relation</li>
			<li>Many to many relation would have the starRating of customers be the weak entity.
			</li>
			<li>The weak entity would store the other user under nameId, locationId, and numberStar. </li>
			<li>
				roastType and coffeeId would be the attributes of the pods.
			</li>
		<img src="pics/starbucks.png" alt="starbucks"/>

	</body>

</htmL>