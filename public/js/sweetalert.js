function deletar(userid, itemid, _token) {
    Swal.fire({
        title: "Deletar?",
        text: "Você ira deletar esse registro",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim!"
    }).then((result) => {
        if (result.isConfirmed) {

            let data = {
                itemid: itemid,
                userid: userid,
                _token: _token,
            };

            fetch("http://127.0.0.1:8000/agendaControlle", {
                method: "delete",
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data)
            }).then(res => {
                //console.log("Request complete! response:", JSON.stringify(res));
                return res.json()
            }).then(json => {
                console.log(json); // add this line
                console.log(json.code);
                if (json.code === 200) {
                    location.reload();
                } else {
                    Swal.fire({
                        title: "ERRO!",
                        text: "algo deu errado.",
                        icon: "error"
                    });
                }
                return
            });;


        }
    });

}