<!-- <h4 class="card-title">News View</h4> -->

<head>
     {literal}
     <style>
     }
th, td {
  border: 1px solid black;
  border-radius: 10px;
}
{/literal}
</style>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
      <link rel="stylesheet" href="chat/dist/style.css">
     </head>
     <center>
<table>
     <tr>
                                               
                                                <th>Name</th>&nbsp; &nbsp; &nbsp; &nbsp;
                                                <!-- <th>Depo</th> -->
                                                <th></th>
                                                <!-- <th>Status</th> -->
                                            </tr>
                                       
        <tr>
             {foreach from=$data item="j"}
           
            <td>{$j.Name}</td> &nbsp; &nbsp; &nbsp; &nbsp;
            <td><a href="stmr_pension_chat.php?pl_key={$j.l_key}" class="btn btn-primary">Chat</a></td>
            {/foreach}
        </tr>
        
        </center>
    

    </table>                                      
      