
<table id="rodapetable" border="1" cellspacing="0" cellpadding="0">
  <tr bgcolor="#CCCCCC"> 
      
    <td id="ladoesquerdo">
      <font size="2" face="Arial, Helvetica, sans-serif">
        <b>Desenvolvido por GMTI - Coordenação de Sistemas</b>        
      </font>
    </td>
      
    <td> 
      <div id="ladodireito">

        <font size="2" face="Arial, Helvetica, sans-serif">
          <strong><? echo $num_visita; ?></strong>
        </font>

        <font class="font1">
          <?php echo date("d/m/Y - H:i:s"); ?>
        </font>
              
      </div>
    </td>
  
  </tr>
</table>

<style type="text/css">

  #rodapetable{
    width: 100%;
    margin-top: 0px;
    position: absolute;
    bottom: 0;
    margin-left: 0px;
    margin-bottom: 0px;
    margin-right: 0px;

  }

  td{
    width: 50%;

  }
  
  #ladoesquerdo{
    text-align: left;
    padding-left: 10px;
  }
  
  #ladodireito{
    text-align: right;
    padding-right: 10px;
  }
  
</style>