function CreerConference() {
    $.ajax
    (
        {
            type:"get",
            url:"Welcome/AfficherNumConf",
            success:function(data)
            {
                $('#divConfererences').empty();
                $('#divConferences').append(data);
                alert(" Conferences créer");
            },
            error:function()
            {
                alert("Impossible de lire les Conferences");
            }
        }
    );
}
function VoterConference() {
    $.ajax
    (
        {
            type:"get",
            url:"Welcome/AfficherConferences",
            data:"TITRE="+TITRE,
            success:function(data)
            {
                $('#divConferences').empty();
                $('#divConferences').append(data);
                alert("Vote comptabilisé");
            },
            error:function()
            {
                alert("Impossible de lire les Conferences");
            }
        }
    );
}
function ValiderVote()
{
    
    var tabTITRE = Array();
    $("input[type=checkbox]").each(function(){
        tabTITRE.push($(this).is(":checked"));
    });


    $.ajax(
        {
            type:"get",
            url:"index.php/CtrlActivites/ValiderVote",
            data:"tab1="+tabTITRE,
            success:function(data)
            {
                alert("OK");
            },
            error:function()
            {
                alert('Erreur SQL');
            }
        }
        );
}