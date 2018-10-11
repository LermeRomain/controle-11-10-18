function CreerConference() {
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/AfficherNumConf",
            success:function(data)
            {
                $('#divConfererences').empty();
                $('#divConferences').append(data);
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
            url:"index.php/Welcome/AfficherConferences",
            success:function(data)
            {
                $('#divConferences').empty();
                $('#divConferences').append(data);
            },
            error:function()
            {
                alert("Impossible de lire les Conferences");
            }
        }
    );
}