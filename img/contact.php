<?php include('header.php'); ?>
<style>
    /*google map*/
    
    #map {
        height: 430px;
        position: relative;
        width: 100%;
    }
    
    .maps-frame {
        height: 430px;
        width: 100%;
    }
    
    .kd-tabbed-vert.header-links .kd-tabbutton a {
        color: #757575;
        display: inline-block;
        height: 100%;
        padding: 0 24px;
        width: 100%;
    }
    
    .kd-tabbed-vert.header-links .kd-tabbutton {
        padding: 0;
    }
    
    .kd-tabbed-vert.header-links .kd-tabbutton.selected a {
        color: #03a9f4;
    }
    
    .kd-tabbed-vert.header-links .kd-tabbutton a:focus {
        text-decoration: none;
    }
    
    p.top-desc {
        padding: 1em 1em .1em 1em;
    }
    
    p.bottom-desc {
        padding: 0em 1em 1em 1em;
    }
</style>
<div id="contact-banner" class="jumbotron contact-banner inner-banner">
    <div class="container-fluid">
        <div class="row is-flex">
            <div class="col-lg-3 col-md-3 ">
                <div class="arrow bottom right">
                    <h2> Take a pause <small> AND START HERE </small></h2>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 ">

            </div>
        </div>
    </div>
</div>
<div class="contact-content inner " id="contact-content">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-10 col-md-offset-1">
                <h3 class="head-message">Benefit from our various, cost effective advertising solutions by filling out the form below. <br> For alternate means of communicating with us;</h3>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 contact-data">
                <div class="row contact-data-item">
                    <div class="col-md-12">
                        <h2 class="text-left">Within Egypt</h2>
                    </div>
                    <div class="col-xs-2 ">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="col-xs-10">
                        <p>Easy Call Number : <a href="tel:19345">19345 </a> </p>
                        <p>Fax Number : <a href="tel:19345">+2 02 2755 9831 </a> </p>
                    </div>
                </div>

                <!-- contact-data-item-->
<!--
                <div class="row contact-data-item">
                    <div class="col-md-12">
                        <h2 class="text-left">Or email us:</h2>
                    </div>
                    <div class="col-xs-2 ">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="col-xs-10">
                        <a href="mailto:customerservice@Yellow.com.eg">customerservice@Yellow.com.eg</a>,<a href="mailto: iypsales@Yellow.com.eg"> iypsales@Yellow.com.eg </a>
                    </div>
                </div>
-->
                <!-- contact-data-item-->
                <div class="row contact-data-item">
                    <div class="col-md-12">
                        <h2 class="text-left">Or even pay us a visit:</h2>
                    </div>
                    <div class="col-xs-2 ">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="col-xs-10">
                        <p>Plot 6 A / 18, Intersection of 253 Street and 205 Street,
                            <br> Degla, Maadi,
                            <br> Cairo, Egypt.
                            <br> To order your free copy of Yellow Pages Print Directory, <a href="#">click here</a>.
                            <br> Or you can provide feedback and/or comments here: .</p>
                    </div>
                </div>
                <!-- contact-data-item-->
            </div>
            <div class="col-md-4 contact-form">

                <form method="post">
                    <div class="form-group ">
                        <label class="control-label requiredField" for="name">
                                Name
                                <span class="asteriskField">
        *
       </span>
                            </label>
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" />
                    </div>
                    <div class="form-group ">
                        <label class="control-label requiredField" for="email">
                                Email
                                <span class="asteriskField">
        *
       </span>
                            </label>
                        <input class="form-control" id="email" name="email" placeholder="Email" type="text" />
                    </div>
                    <div class="form-group ">
                        <label class="control-label " for="tel">
                                Telephone #
                            </label>
                        <input class="form-control" id="tel" name="tel" placeholder="Telephone " type="text" />
                    </div>
<!--
                    <div class="form-group ">
                        <label class="control-label " for="subject">
                                Subject
                            </label>
                        <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" />
                    </div>
-->
                    <div class="form-group ">
                        <label class="control-label " for="message">
                                Message
                            </label>
                        <textarea class="form-control" cols="40" id="message" name="message" placeholder="Message" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <div>
                            <button class="btn btn-warning btn-lg" name="submit" type="submit">
                                    Get Connected
                                </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!--            end of row-->
    </div>
    <!--        end of container-->
<!--
    <div class="well well-lg">
        <div class="container">
            <h2>FEEDBACK AND COMMENTS</h2>
            <p>Fill out our feedback form here or send us an email at <a href="mailto:Webmaster@Yellow.com.eg">Webmaster@Yellow.com.eg</a>
                <br> For technical inquiries: please send us an email to <a href="mailto:Webmaster@Yellow.com.eg">Webmaster@Yellow.com.eg</a>
                <br> For Career Opportunities at Yellow Media, please send your resume by email to our Human Resources Department at <a href="mailto:Jobs@Yellow.com.eg">Jobs@Yellow.com.eg </a>

            </p>
        </div>

    </div>
-->
    <div id="map">

    </div>

</div>
<!-- end of #contact-content-->

<?php include('footer.php'); ?>

<!--       Map Scripts     -->
<script>
    var controller = new ScrollMagic.Controller();
</script>
<script>
    var placeid_json = [{
        "placeid": 'ChIJ82T-J4pHWBQRLVaaNAXSolo',
        "content": "   1   "
    }, {
        "placeid": 'ChIJ5Y-HcUdBWBQR5WVXp8TJWUI',
        "content": "   2   "
    }, {
        "placeid": 'ChIJ1wb5jIUVWBQRUHpUy4KM54Y',
        "content": "   3   "
    }, {
        "placeid": 'ChIJmdI4RfMWWBQRwBrDZBXIjcg',
        "content": "   4   "
    }, {
        "placeid": 'ChIJkQTXoOE9WBQRJbcwbm3lDSQ',
        "content": "   5   "
    }, {
        "placeid": 'ChIJ7-sdD_M_WBQR0OKY6Uq21Dk',
        "content": "   6   "
    }, {
        "placeid": 'ChIJ7Q2V7sJFWBQRUF7G_O5cGfw',
        "content": "   7   "
    }, {
        "placeid": 'ChIJeXuW-nad9xQRZyCisdTTd9Q',
        "content": "   8   "
    }, {
        "placeid": 'ChIJFW9IS5HE9RQRe7akZ9H4K5k',
        "content": "   9   "
    }, {
        "placeid": 'ChIJFW9IS5HE9RQRe7akZ9H4K5k',
        "content": "   9   "
    }, {
        "geometry": {
            "location": {
                "lat": 30.099632,
                "lng": 31.317301
            }
        },
        "name": "Yellow Media, an Egypt Yellow Pages Company",
        "formatted_address": "18 El Andalus St., Floor 1",
        "content": "   10   "


    }, {
        "geometry": {
            "location": {
                "lat": 29.998144,
                "lng": 31.412923
            }
        },
        "name": "Yellow Media, an Egypt Yellow Pages Company",
        "formatted_address": "Villa 113, Rd. 38, 5th District, 5th Zone, Floor 2 Flat 5",
        "content": "   11   "


    }, {
        "geometry": {
            "location": {
                "lat": 29.970123,
                "lng": 31.277011
            }
        },
        "name": "Yellow Media, an Egypt Yellow Pages Company",
        "formatted_address": "10 Rd. 263",
        "content": "   12   "


    }];
    var openedInfoWindow = null;
    //            var bounds;
    var map;



    function initMap() {
        //                bounds = new google.maps.LatLngBounds();
        var latitude = 30.054028,
            longitude = 31.336967,
            radius = 8000,

            center = new google.maps.LatLng(latitude, longitude),
            mapOptions = {
                center: center,
                zoom: 11,
                scrollwheel: false
            };

        //END OF MAP POSITIONING

        var styledMapType = new google.maps.StyledMapType(
//            [
//            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
//            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
//            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
//            {
//              featureType: 'administrative.locality',
//              elementType: 'labels.text.fill',
//              stylers: [{color: '#d59563'}]
//            },
//            {
//              featureType: 'poi',
//              elementType: 'labels.text.fill',
//              stylers: [{color: '#d59563'}]
//            },
//            {
//              featureType: 'poi.park',
//              elementType: 'geometry',
//              stylers: [{color: '#263c3f'}]
//            },
//            {
//              featureType: 'poi.park',
//              elementType: 'labels.text.fill',
//              stylers: [{color: '#6b9a76'}]
//            },
//            {
//              featureType: 'road',
//              elementType: 'geometry',
//              stylers: [{color: '#38414e'}]
//            },
//            {
//              featureType: 'road',
//              elementType: 'geometry.stroke',
//              stylers: [{color: '#212a37'}]
//            },
//            {
//              featureType: 'road',
//              elementType: 'labels.text.fill',
//              stylers: [{color: '#9ca5b3'}]
//            },
//            {
//              featureType: 'road.highway',
//              elementType: 'geometry',
//              stylers: [{color: '#746855'}]
//            },
//            {
//              featureType: 'road.highway',
//              elementType: 'geometry.stroke',
//              stylers: [{color: '#1f2835'}]
//            },
//            {
//              featureType: 'road.highway',
//              elementType: 'labels.text.fill',
//              stylers: [{color: '#f3d19c'}]
//            },
//            {
//              featureType: 'transit',
//              elementType: 'geometry',
//              stylers: [{color: '#2f3948'}]
//            },
//            {
//              featureType: 'transit.station',
//              elementType: 'labels.text.fill',
//              stylers: [{color: '#d59563'}]
//            },
//            {
//              featureType: 'water',
//              elementType: 'geometry',
//              stylers: [{color: '#17263c'}]
//            },
//            {
//              featureType: 'water',
//              elementType: 'labels.text.fill',
//              stylers: [{color: '#515c6d'}]
//            },
//            {
//              featureType: 'water',
//              elementType: 'labels.text.stroke',
//              stylers: [{color: '#17263c'}]
//            }
//          ], 
            {
                name: 'Styled Map'
            });

        //END OF MAP COLORS STYLING


        map = new google.maps.Map(document.getElementById("map"), mapOptions);

        var winHeight = $(window).height();
        var scene = new ScrollMagic.Scene({
                triggerElement: "#map",
                duration: 500,
                reverse: false
            })
            .on('start', function() {
                setMarkers(center, radius, map);
            })
            .addTo(controller);


        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
    }

    //END OF initMap

    function setMarkers(center, radius, map) {

        var json = placeid_json;
        for (var i = 0, length = json.length; i < length; i++) {
            var data = json[i];
            createMarker(data, map, i * 100);
        }
    }

    function createMarker(data, map, timeout) {

        var image = {
            url: 'img/yellow-logo-marker.svg',
            scaledSize: new google.maps.Size(35, 35),
        };
        var service = new google.maps.places.PlacesService(map);
        service.getDetails({
            placeId: data.placeid
        }, function(result, status) {
            if (status != google.maps.places.PlacesServiceStatus.OK) {
                //                        if (status === 'OK'){
                var marker = new google.maps.Marker({
                    map: map,
                    icon: image,
                    animation: google.maps.Animation.DROP,
                    position: data.geometry.location,
                    optimized: false,
                    //position: result.geometry.location
                });
                //                        }else{


                //                        }
                //                        google.maps.event.trigger(map, 'resize');
                //                        //    map.fitBounds(bounds);
                marker.addListener('click', infoBox(map, marker, data, result));
                //                        infoBox(map, marker, data, result);
                console.log(status);
                return;
            }
            window.setTimeout(function() {
                //                        if (data.placeid == null) {
                //                            
                //                        } else {
                var marker = new google.maps.Marker({
                    map: map,
                    icon: image,
                    animation: google.maps.Animation.DROP,
                    optimized: false,
                    place: {

                        placeId: data.placeid,
                        location: result.geometry.location,



                    },

                    //position: result.geometry.location
                });
                //                        }


                //    bounds.extend(result.geometry.location);
                google.maps.event.trigger(map, 'resize');
                //    map.fitBounds(bounds);
                infoBox(map, marker, data, result);
            }, timeout);
        });

    }

    function infoBox(map, marker, data, result) {

        var infoWindow = new google.maps.InfoWindow();
        var Item = result || data;
        google.maps.event.addListener(marker, "click", function(e) {

            infoWindow.setContent('<div class="map-data"><h3>' + Item.name + '</h3>' +
                //'Place ID: ' + place.place_id + '<br>' +
                Item.formatted_address + '</div>');
            infoWindow.open(map, marker);
        });

        (function(marker, data) {

            google.maps.event.addListener(marker, "click", function(e) {

                infoWindow.setContent('<div class="map-data"><h3>' + Item.name + '</h3>' +
                    //'Place ID: ' + place.place_id + '<br>' +
                    Item.formatted_address + '</div>');
                infoWindow.open(map, marker);
            });
        })(marker, data);
    }

    //            google.maps.event.addDomListener(window, 'load', initMap);
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAr4C6WyP2wFVhcqlOoiHHuGLXEkjz5Nnw&libraries=geometry,places&callback=initMap">
    //                    initMap
</script>
<!--
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAr4C6WyP2wFVhcqlOoiHHuGLXEkjz5Nnw&callback=initMap">
    </script>
-->


</body>

</html>