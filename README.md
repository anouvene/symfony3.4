# Projet Symfony3.4.*

### Héritage de bundle parent sera déprécié dans symfony4<br>

Deprecated in symfony v4  
@return null|string  

    public function getParent()  
    {  
        return "AppBundle";
    }

### Importer/organiser les routes proprement avec yaml

**1 - Informer symfony que notre/nos bundle(s) comporte(nt) d'autres routes en provenance d'autres fichiers yaml séparés** 

/nom_projet  
-- App  
---- config  
------ routing.yml  

    import:
        resource: "@DocumentBundle/Resources/config/routing_import.yml"
        prefix:   /

**2 - Créer/Organiser vos routes dans un ou plusieurs séparés**  
/src  
-- DocumentBundle  
---- Resources  
------ config  
-------- routing_import.yml  

    document_hello:
        path:     /hello/{prenom}/{nom}
        defaults: { _controller: DocumentBundle:Hello:hello, prenom: "JOHN", nom: "GRUBER" }    

### API symfony 3
http://api.symfony.com/3.0<br>


