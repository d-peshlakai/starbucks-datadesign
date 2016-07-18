<!DOCTYPE html>
<htmL>
	<title>
		Starbucks Datadesign
	</title>
	<body>
		<h1>
			Persona
		</h1>
		<p>The site assigned was Starbucks web page. The user purpose would be a non-member 		customer purchasing either espresso coffee whole bean or the Veriso pods.</p>
		<h1>Interaction Flow</h1>
		<p>The goal would be to satisfy the customers taste buds by purchasing a specific flavor coffee including mapping out the data at rest. The logical containers would involve: order, customer, and product, and vendor.  The user would start off in the following steps:</p>
		<ol>
			<li>
				Entering URL site
			</li>
			<li>
				Clicking on category titled "Coffee"
			</li>
			<li>
				Selecting from choice from category "Whole Bean and Ground"
			</li>
			<li>Select choice of coffee form (bean or pods)</li>
			<li>Select one of the options: blonde, medium, or dark</li>
			<li>Add choice to checkout cart link</li>
			<li>Enter billing information and purchasing information.</li>
		</ol>
		<h1>Use Case</h1>
		<p>Goal: As a non Starbucks member, I want to buy a bag of expresso bean coffee </p>
		<ol>
			<li>What: Use of the Iphone, android, and desktop versions of Windows, and Mac computers.
			</li>
			<li>Who: Customer satisfying the taste buds by buying coffee grounds.</li>
			<li>Why: I want to buy my favorite tasting coffee. It reflects off of the customers persona.</li>

		</ol>
		<h1>Conceptual Model</h1>
		<p>
			Relationships
			<ol>
				<p>One to many: entry can have many entities. AnonymousId would be the primary key and productId would be a foreign key. The anonymousId would have 0 to more such as one of the following examples:</p>
			<li>
				Selection of purchasing Pods or whole ground bean
			</li>
			<li>
				Selection of type of roast: Dark, Blonde, or Medium
			</li>
			<li>Also choosing from decaffeinated or caffeinated type.</li>
			<li>
				Option to share on another social media source like Pinterest.
			</li>
			<li>Customer can also distinguish where espresso is from and which multi region it is derived from.</li>
			<li>Also select the particular quantity wanting to purchased.</li>
			<li>The reviews can entail which top product is a favorite by other customers</li>
			</ol>
		</p>
		<p>Many to many could occur when customer decides to become a member and/or purchase other products such as tea, subscription, merchandise, etc. A weak entity would open a wide range of entities by becoming a member. An example of a weak entity would be add more responsibilites to customer by becoming a member. It would ask to create account in order to access discounted products, payment information saved on, forcing customer to purchase certain products and enforce more spending.</p>
	</body>
</htmL>