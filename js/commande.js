/**
 * Created by wap48 on 07/12/15.
 */
'use strict';

var commande = function() {
    var jsonListe = null;
    var quantite = null;
    var commandeListe = null;
    var number =  null;
    var commande = null;
    var bouttonSupprimer = null;
    var bouttonAjouter = null;
    var bouttonCommander = null;

    this.init = function(){
        var xhr = new XMLHttpRequest();
        xhr.open('get', 'json/session.json', true);
        xhr.send();
        xhr.addEventListener('readystatechange', chargementReussi);


        bouttonAjouter = document.querySelector('submit');
        bouttonAjouter.addEventListener('click', ajouterCommande.bind(this));

        bouttonCommander = document.querySelector('commander');
        bouttonCommander.addEventListener('click', enregisterCommande.bind(this));


            if(sessionStorage.getItem('commande')){
                    getCommande();
            } else {
                    setCommande();
            }
    };

    setCommande = function() {
            sessionStorage.setItem('commande', null);
    };

    getCommande = function() {
            commandeListe = JSON.parse(sessionStorage.getItem('commande'));
            var ajout = document.querySelector('.ajout');
            for (var i = 0, l = commandeListe.length; i < l; i++) {

            }

            bouttonSupprimer = document.querySelectorAll('.cmde-supprimer');
            for (var j = 0, k = bouttonSupprimer.length; j < k; j++) {
                bouttonSupprimer[i].addEventListener('click', enleverCommande.bind(this));
            }
    };

    var ajouterCommande = function(e) {
        e.preventDefault();
        commande = e.target.parentElement.parentElement;
        commandeListe.removeChild(cmde);
    };

    var enregisterCommande = function(e) {
        e.preventDefault();
        jsonListe = [];
        var listeContenu = document.querySelectorAll('.cmde-description');
        for(var m = 0, n = listeContenu.length; m < n; m++){
            var liste = new Liste(listeContenu[m].innerHTML);
            jsonListe.push(liste);
        }
        sessionStorage.setItem('commande', JSON.stringify(jsonListe));
    };

    var getHTML = function(){
        var integration = '<article class="cmde">' +
            '<img src="" />' +
            '<p class="cmde-description"></p>' +
            '<br>' +
            '<p class="cmde-supprimer">' +
            '<a href="">Supprimer</a>' +
            '</p>' +
            '</article>';
        return integration;
    };

    var compterCommande = function() {
        quantite = document.querySelector('.badge');
        number = jsonListe.length;

    };

};