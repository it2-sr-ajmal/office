<script>
    jQuery(document).ready(function()
    {
        jQuery("#close_link").click(function()
        {
            jQuery("#message_box").fadeOut(1000);
        }
        )
    })
</script>
<style>
#message_box{
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    color: red;
    border: 1px solid #CCC;
    background-color: rgb(246, 178, 178);
    text-align: center;
    margin-bottom: 10px;
}
#close_link {
    width: 25px;
    height: 25px;
    border: 1px solid rgb(204, 204, 204);
    margin-right: 5px;
}
</style>
{if $MESSAGE_DETAILS }
    {if $MESSAGE_STATUS }
        {if $MESSAGE_TYPE }
            {assign var="message_class" value="errorHandler alert alert-success"}
        {else}
            {assign var="message_class" value="errorHandler alert alert-danger"}
        {/if}

        <div id="message_box"  class="{$message_class}">
            <span> {$MESSAGE_DETAILS}
                 <a href="#" id="close_link" class="panel-close pull-right"> <i class="fa fa-close"></i></a>
            </span>
            <!--<div id="message_note"> 
                <table>
                    <tr>
                        <td>                            
                            {$MESSAGE_DETAILS}
                        </td>
                    </tr>
                </table>
            </div>--->
            
        </div>
    {/if}
{/if}

