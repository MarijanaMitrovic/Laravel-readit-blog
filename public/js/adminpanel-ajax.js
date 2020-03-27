




document.querySelector("#datepicker").addEventListener("change",function(){
    if(document.querySelector("#datepicker").value !== "" )
    {
        $.ajax({
            url : "/admin-panel/activities/" +
            document.querySelector("#datepicker").value,
            dataType: "json",
            success:function(data){
                if (data.length === 0 )
                {
                    $ ("#table").html(` <div class="alert alert-warning">
                There is no activity for choosen date.
            </div>`);
                }
                else
                    {
                    let print =` <table class="table table-bordered">
                            <thead>
                            <tr>

                                
                                <th>Activity</th>
                                <th>User</th>
                                <th>Time</th>

                            </tr>
                            </thead>
                            <tbody> 
                    `;
                        for(let d in data){
                            console.log(JSON.stringify(data));
                            print+="<tr>";

                            print+=`<td>${data[d].activity_content}</td>
                            <td>${data[d].usermail}</td>
                            <td>${data[d].time}</td>
                            </tr>`;
                        }
                        print+=`</tbody>
                        </table>`;
                        $("#tablecontent").html(print);
                       }

                       },
            error: function(error){
                console.log("Error filtering by date"+error);
            }
        });
    }
});