        const bn = document.querySelector("button");
        const info = document.querySelector(".info");

        function getLocation(){
            if(window.navigator.geolocation){
                bn.innerHTML = `Allow to detect loaction <i class="fa fa-warning"></i>`;
                bn.style.background = "red";
                navigator.geolocation.getCurrentPosition(async function(position){
                    bn.innerHTML = `Detecting Location . . . <i class="fa fa-search-plus" aria-hidden="true"></i>`;
                    bn.style.background = "#faeelc";
                    bn.style.color = "#000000";

                    let lat = position.coords.latitude;
                    let long = position.coords.longitude;
                    await fetch(`https://api.opencagedata.com/geocode/v1/json?q=${lat}+${long}&key=6e4b94bc21464ee3aa8b89a79cebfc3f`).then((response)=> response.json()).then((data) => {
                        let locationDetails = data.results[0].components;
                        info.innerHTML = `
                        <div>
                            <p>Your Live Location is </p>
                            <ul>
                                <li><span>Road :</span> ${locationDetails.road}</li>
                                <li><span>City :</span> ${locationDetails.city}</li>
                                <li><span>District :</span> ${locationDetails.state_district}</li>
                                <li><span>State :</span> ${locationDetails.state}</li>
                                <li><span>Postal Code :</span> ${locationDetails.postcode}</li>    
                            </ul>
                        </div>`;

                        info.style.visibility = "unset";
                        bn.style.color = "#ffffff";
                        bn.style.background = "#17b978";
                        bn.innerHTML = `Get Data  Again <i class="fa fa-refresh" aria-hidden="true"></i>`;

                    }).catch(()=>{
                        bn.innerHTML = `<p>something went wrong</p>`;
                    });
                }, function (error){
                    if(error.code == 1){
                        bn.innerText = "User has blocked the permission";
                    }
                    else if(error.code == 2){
                        bn.innerText = "Position not found";
                    }
                    else if(error.code == 3){
                        bn.innerText = "TimeOut No result found";
                    }
                });
                
            }
        }
        function reloadPage(){
            location.reload();
        }