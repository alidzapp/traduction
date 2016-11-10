/*	recuperer la liste des mots a traduire
	ajouter un ecouteur du click
	$.ajax
	remplace le mot a traduire par sa traduction*/

$(function(){ // =$(document).ready(function(){

	let words=($('.words'));

	words.on('click', function(){
		console.log(words);
		let that=$(this);
		console.log(that.text());


		$.ajax({
			  method: "GET",
			  url: "php/translate.php?mot="+that.text(),
			 
		})
			.done(function(data) {
				that.text(data)
			})
	})
});


/*VErsion GENERAL


$(function(){ // =$(document).ready(function(){

	$('.liste').on('click','li' ,function(){
		console.log($('.liste'));
		let that=$(this);
		console.log(that.text());


		$.ajax({
			  method: "GET",
			  url: "php/translate.php?mot="+that.text(),
			  data: { name: "John", location: "Boston" }
		})
			.done(function(data) {
				that.text(data)
			})
	})
});

*/