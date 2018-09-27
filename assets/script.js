var inputData;
var isCountyCreated = false;
var isTownCreated = false;
var selectedCountry;
var createCountry = true;
var selectedCounty;
var createTown = false;
var dontClick = false;

jQuery(document).ready(function ($)
{

    $(".scroll").click(function (event)
    {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 800, 'swing');
    });
});

function populateCountryTown(file, fieldToPopulate, query, createCountry, createTown)
{
    if (query !== '')
    {
        $.ajax({
            
            url: file,
            method: "POST",
            data: {query: query},
            success: function (data)
            {
                if(createTown === true)
                {
                    $(fieldToPopulate).append(data);
                }
                if (createCountry === true)
                {
                    inputData = data;
                    if(inputData.includes("Country Not Found"))
                    {
                        dontClick = true; 
                    }
                    $(fieldToPopulate).fadeIn();
                    $(fieldToPopulate).html(data); // Shows the autocomplete options
                    createCountry = false;
                } 
                else if(createCountry === false)
                {
                    $(fieldToPopulate).append(data);
                } 
            }
        });
    }
}


$(document).ready(function ()
{
    $('#countyMain').hide();
    $('#townss').hide();
    $('#country').keyup(function ()
    {
        var query = $(this).val();
        populateCountryTown('searchCountry.php', '#countryList', query, createCountry, createTown);
//        if (query === "")
//        {
//            $("#countyMain").remove();
//            isCountyCreated = false;
//        }
    });

    $(document).on('click', '#divv,.countries', function ()
    {
        if (dontClick == true)
        {
            $('#countryList').preventDefault(); // If no country was found, make sure the user cannot select this text as an option.
        } else
        {
            selectedCountry = $(this).text(); // Once user has selected a country this variable is set to then get the country_id of it.
            $('#country').val($(this).text()); // fills in the input box with the value returned by the populateCountryCountyTown function.
            $('#countryList').fadeOut(); // makes the autocomplete list of options fade out.
            if (isCountyCreated == false)
            {
                $('#countyMain').show(); // if the county field is not yet created then add the select option after the country box.
                isCountyCreated = true; // County has now been created so no more county boxes can be created.

//                createCountry = false; // Since we are now populating the counties then we need to make sure that the correct action takes place in the populateCountryCountyTown function. 
                
                populateCountryTown('searchCounty.php', '#countySelect', selectedCountry, createCountry, createTown);
    
    $("#countySelect").change(function ()
    {
         if (isTownCreated == false)
        {
            
            
            $('#townss').show();
            isTownCreated = true; 
            
            
        } 
        createTown = true;
        selectedCounty = $("#countySelect option:selected").text();
            populateCountryTown('searchTown.php', '#townSelect', selectedCounty, createCountry, createTown);
             
    });
            }

        }

    });
    
    
    
    $(document).on('click', '#countryList', function () // If the user clicks anywhere then the option box will disapear.
    {
            for (var i = 0; i <= 2; i++)
            {
                populateCountryTown('searchCounty.php', '#countySelect', selectedCountry, createCountry, createTown);
            }
        
    });

$(document).on('click', '*', function () // If the user clicks anywhere then the option box will disapear.
    {
        createCountry = true; // enables the display of the country box again
        dontClick = false;
        $('#countryList').fadeOut();
        
    });

    $('#country').keyup(function () // if the user deletes or changes everything in the input box then the option box will disapear.
    {
//        createCountry = true;   // enables the display of the country box again
        dontClick = false;
        isCountyCreated = false;
        isTownCreated = false;
        $("#townSelect").hide();
        $("#countySelect").hide();
        $("#countyMain").hide();
        for (var i = 0; i <= 4; i++)
        {
            populateCountryTown('searchCounty.php', '#countySelect', selectedCountry, createCountry, createTown);
        }
        
        if (!$(this).val())
        {
            $('#countryList').fadeOut();
        }
    });
});
 





// uniform
$(function ()
{
    $('input[type="checkbox"], input[type="radio"], select').uniform();
});

// social icon
$(document).ready(function ($)
{
    $('.social i').tooltip('hide')
});

// 

var wow = new WOW(
        {
            boxClass: 'wowload', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true        // act on asynchronously loaded content (default is true)
        }
);
wow.init();




$('.carousel').swipe({
    swipeLeft: function ()
    {
        $(this).carousel('next');
    },
    swipeRight: function ()
    {
        $(this).carousel('prev');
    },
    allowPageScroll: 'vertical'
});