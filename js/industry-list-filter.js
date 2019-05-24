( function( $ ) {

  var urlParams = new URLSearchParams(location.search);
  const industryFilter = urlParams.get('industries');

  if(industryFilter) {
    //filter industries
    $('.titled-section').addClass('display-none');
    $('.titled-section').addClass('hidden');

    const industryArray = industryFilter.split(',');

    if(industryArray.includes('coldStorage')) {
      //show cold storage
      $('#coldStorageAndDistribution').removeClass('display-none');
      setTimeout(function() {
        $('#coldStorageAndDistribution').removeClass('hidden');
      }, 200);


    }

    if(industryArray.includes('foodBeverage')) {
      //show food and beverage
      $('#foodBeverageProcessors').removeClass('display-none');
      setTimeout(function() {
        $('#foodBeverageProcessors').removeClass('hidden');
      }, 200);

    }

    if(industryArray.includes('meatSeafood')) {
      //show meat and seafood
      $('#meatSeafoodProcessors').removeClass('display-none');
      setTimeout(function() {
        $('#meatSeafoodProcessors').removeClass('hidden');
      }, 200);

    }

    if(industryArray.includes('fruitVegetable')) {
      //show fruit and vegetables
      $('#fruitAndVegetableProcessors').removeClass('display-none');
      setTimeout(function() {
        $('#fruitAndVegetableProcessors').removeClass('hidden');
      }, 200);

    }

    if(industryArray.includes('breweries')) {
      //show breweries
      $('#breweriesDistribution').removeClass('display-none');
      setTimeout(function() {
        $('#breweriesDistribution').removeClass('hidden');
      }, 200);

    }

    if(industryArray.includes('wineries')) {
      //show wineries
      $('#wineries').removeClass('display-none');
      setTimeout(function() {
        $('#wineries').removeClass('hidden');
      }, 200);

    }

    if(industryArray.includes('iceRinks')) {
      //show ice rinks
      $('#wineries').removeClass('display-none');
      setTimeout(function() {
        $('#iceRinks').removeClass('hidden');
      }, 200);

    }

    //show cold storage

  }

	} )( jQuery );
