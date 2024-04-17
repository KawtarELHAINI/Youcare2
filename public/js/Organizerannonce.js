document.addEventListener("DOMContentLoaded", function () {


    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
    }

    // Récupérer le token JWT à partir du cookie
    var token = getCookie("jwt_token");
    if (!token) {
        window.location.href = "/login";
        return;
    }



    ////

    var role = getCookie("role"); 
    console.log(role);
    if (role !== "organizer") {
        window.location.href = "/login"; 
        return;
    }

    var annoncesWrapper = document.getElementById("annonce-wrapper");

    function loadAnnonces() {
        var annoncesRequest = new XMLHttpRequest();
        annoncesRequest.open("GET", "/api/annoucements/10", true);

        annoncesRequest.setRequestHeader("Authorization", "Bearer " + token);

        annoncesRequest.onreadystatechange = function () {
            if (annoncesRequest.readyState == 4) {
                if (annoncesRequest.status == 200) {
                    var data = JSON.parse(annoncesRequest.responseText);
                    if (data.length > 0) {
                        data.forEach(function (annonce) {
                            createAnnonceElement(annonce);
                        });
                    } else {
                        annoncesWrapper.innerHTML = "<p>Il n'y a pas d'annonces disponibles.</p>";
                    }
                } else {
                    console.error("Erreur lors de la récupération des annonces :", annoncesRequest.statusText);
                }
            }
        };

        annoncesRequest.send();
    }

    loadAnnonces();


    /////22////

    document.getElementById("addAnnonce").addEventListener("submit", function (event) {
        event.preventDefault();

        var formData = new FormData(this);

        var addAnnonceRequest = new XMLHttpRequest();
        addAnnonceRequest.open("POST", "/api/annoucement", true);
        addAnnonceRequest.setRequestHeader("X-Requested-With", "XMLHttpRequest");
        addAnnonceRequest.setRequestHeader("Authorization", "Bearer " + token);
        addAnnonceRequest.onreadystatechange = function () {
            if (addAnnonceRequest.readyState === XMLHttpRequest.DONE) {
                if (addAnnonceRequest.status === 200) {
                    var newAnnonce = JSON.parse(addAnnonceRequest.responseText);
                    createAnnonceElement(newAnnonce);
                    alert("Annonce ajoutée avec succès");
                } else {
                    console.error("Erreur lors de la requête :", addAnnonceRequest.statusText);
                }
            }
        };
        addAnnonceRequest.send(formData);
    });


    /////

    function createAnnonceElement(annonce) {
        var div1 = document.createElement("div");
        div1.className =
            "div1 bg-white shadow-xl px-8 py-12 sm:px-12 lg:px-8 mb-6 rounded-lg";
        div1.id = "annonce-" + annonce.id;

        var title = document.createElement("h3");
        title.className =
            "titre text-3xl text-center font-semibold text-black";
        title.textContent = annonce.titre;

        var description = document.createElement("p");
        description.className = "paragraph font-semibold";
        description.textContent = annonce.description;

        var location = document.createElement("p");
        location.className = "location";
        location.innerHTML =
            "Location: <strong>" + annonce.location + "</strong>";

        var date = document.createElement("p");
        date.className = "location";
        date.innerHTML =
            "Date: <strong>" + annonce.date + "</strong>";

        var competence = document.createElement("p");
        competence.className = "location";
        competence.innerHTML =
            "Competence: <strong>" + annonce.competance + "</strong>";

        var divFlex = document.createElement("div");
        divFlex.className = "divFlex  w-full h-10";

       
        };

        

        var image = document.createElement("img");
        image.src =
            "https://tailus.io/sources/blocks/end-image/preview/images/ux-design.svg";
        image.className = "w-2/3 ml-auto";
        image.alt = "Illustration";
        image.loading = "lazy";
        image.width = "900";
        image.height = "600";

        // Ajouter les éléments créés au conteneur principal
        div1.appendChild(title);
        div1.appendChild(description);
        div1.appendChild(location);
        div1.appendChild(date);
        div1.appendChild(competence);
        div1.appendChild(image);
        div1.appendChild(divFlex);
        divFlex.appendChild(deleteButton);
        divFlex.appendChild(editButton);

        annoncesWrapper.appendChild(div1);
    }
);