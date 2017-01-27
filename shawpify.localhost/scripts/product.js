(function(){
	
	var Product = function(pName, pCode, pPrice){
		this.name = pName;
		this.code = pCode;
		this.price = pPrice;

		
	}
	Product.prototype.getPrice = function(){
		return "$" + this.price;
	}
	var aProduct = new Product("Bluetooth speaker", "BS1001", 59.95);
	
	document.write(aProduct.getPrice());

})()