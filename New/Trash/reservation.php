
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>C|W Reservations</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/reservation.css">
	<link rel="stylesheet" href="css/wine.css">
	<link rel="stylesheet" href="css/pure-min.css">
	<link rel="stylesheet" href="css/960_24_col.css">

	<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>


</head>
<body>

	<div class="wrapper">
	<div class="reswrap">

 		<div class="container_24">
 			 <div class="header">
                     
                     <div class="grid_24">
                         <h4>Le Connaiseur</h4>
                         <nav id="nav">
                             <ul>
                                 <li><a href="index2.html">Home</a></li>
                                 <li><a href="#">Cheese</a></li>
                                 <li><a href="wine.html">Wine</a></li>
                                 <li><a href="#">Order</a></li>
                                 <li><a href="#">Contact</a></li>
                             </ul>
                         </nav>
                     </div>
                 </div>
 			<div class="grid_14" id="info">
 				<span style="font-family: 'Roboto', sans-serif; font-size:2em; color:white; opacity:0.8;">French Food</span>
 				<p> &nbsp; French regional cuisines use locally grown vegetables, such as pomme de terre (potato), blé (wheat), haricots verts (a type of French green bean), carotte (carrot), poireau (leek), navet (turnip), aubergine (eggplant), courgette (zucchini), and échalotte (shallot).<br>

&nbsp;&nbsp;French regional cuisines use locally grown fungi, such as truffe (truffle), champignon de Paris (button mushroom), chanterelle ou girolle (chanterelle), pleurote (en huître) (oyster mushrooms), and cèpes (porcini).<br>

&nbsp;&nbsp;Common fruits include oranges, tomatoes, tangerines, peaches, apricots, apples, pears, plums, cherries, strawberries, raspberries, redcurrants, blackberries, grapes, grapefruit, and blackcurrants.<br>

&nbsp;&nbsp;Varieties of meat consumed include poulet (chicken), pigeon (squab), dinde (turkey), canard (duck), oie (goose, the source of foie gras), bœuf (beef), veau (veal), porc (pork), agneau (lamb), mouton (mutton), lapin (rabbit), caille (quail), cheval (horse), grenouille (frog), and escargot (snails). Commonly consumed fish and seafood include cod, canned sardines, fresh sardines, canned tuna, fresh tuna, salmon, trout, mussels, herring, oysters, shrimp and calamari.<br>

&nbsp;&nbsp;Eggs are fine quality and often eaten as: omelettes, hard-boiled with mayonnaise, scrambled plain, scrambled haute cuisine preparation, œuf à la coque.<br>

&nbsp;&nbsp;Herbs and seasonings vary by region, and include fleur de sel, herbes de Provence, tarragon, rosemary, marjoram, lavender, thyme, fennel, and sage.<br>

&nbsp;&nbsp;Fresh fruit and vegetables, as well as fish and meat, can be purchased either from supermarkets or specialty shops. Street markets are held on certain days in most localities; some towns have a more permanent covered market enclosing food shops, especially meat and fish retailers. These have better shelter than the periodic street markets.</p>
 			</div>

		<form action="" class="pure-form pure-form-stacked grid_9" id="forma" method="post">


		


			



			<label for="Restaur" id="labells">Restaurant</label> 
			<input list="Restaurant--s" name="Restaurant" autofocus id="Restaur" class="line">
			<!-- <select>
        <option value="1" selected>any food</option>
        <option value="2">Indian</option>
        <option value="3">French</option>
        <option value="4">Japanese</option>
        <option value="2">Italian</option>
    </select> -->
			<datalist id="Restaurant--s">
				<option value="Maxim's">
					<option value="Le Petit Nice">
						<option value="Le Chantecler">
							<option value="Le Chantecler">
								<option value="L'Astrance">
									<option value="Macéo">
										<option value="Huitrerie Regis">
											<option value="Les Tablettes">
											</datalist>


				<label for="Restaur" id="labells">Table Number</label>
				<input type="number" name="table_no" id="t_no" class="lin" min="1" max="25">

				
				<label for="dte" id="labells">Date</label> 
				<input type="date" name="date" placeholder="yyyy-mm-dd" id="dte" class="line">

				<label for="nop" id="labells">Number of persons</label> 
				<input type="number" name="no_of_persons" min="1" max="6" id="nop" class="line">

				<input type="submit" value="Reserve For Me." class="pure-button pure-button-primary" id="butt">

		</form>


<div >
	
	<span class="error" style="display:none"> Please Enter Valid Data</span>
	<span class="success" style="display:none; font-size:1.5em;"> Reservation Successfull!</span>
</div>
</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js">
</script>
<script type="text/javascript" >
$(function() {
	$("#butt").click(function() {

		var Restaurant = $("#Restaur").val();
		var table_no = $("#t_no").val();
		var date = $("#dte").val();
		var no_of_persons = $("#nop").val();
		var dataString = 'Restaurant='+ Restaurant + '&table_no=' + table_no + '&date=' + date + '&no_of_persons=' + no_of_persons;

		if(Restaurant=='' || table_no=='' || date=='' || no_of_persons=='')
		{
			$('.success').fadeOut(200).hide();
			$('.error').fadeOut(200).show();
		}
		else
		{
			$.ajax({
				type: "POST",
				url: "insert.php",
				data: dataString,
				success: function(){
					$('.success').fadeIn(200).show();
					$('.error').fadeOut(200).hide();
				}
			});
		}
		return false;
	});
 });
</script>




	</div>

	</div>
</body>
</html>
