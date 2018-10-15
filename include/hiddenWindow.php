<div id="itmeOrderContainer">

<!-- BUTTON DIV -->
    <div class="closeBtnDiv">
        <div onclick="closeWindow()">cancel</div>
    </div>


<!-- PIC DIV -->
    <div class="itemPicDiv">
        <img id="lrgImg" src="" alt="">
    </div>


<!-- FORM DIV -->
    <div class="formDiv">
        <table>
            <form id="orderForm" action="" method="post">
                
                <thead>
                    <tr>
                        <th>item</th>
                        <th>qty</th>
                        <th>size</th>
                        <th>price</th>
                    </tr>
                </thead>


                <tbody>
                    <tr>
                        <td>Entree</td>
                        <td>
                            <select name="entreeQty" id="entreeQty" onchange="calOrder.addUp(this,'entreePrice')">
                                <option value="0">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td>&nbsp;</td>
                        <td id="entreePrice">dynamic</td>
                    </tr>


                    <tr>
                        <td>sour cream</td>
                        <td>
                            <select name="sourQty" data-itemId="sourCream" onchange="calOrder.addUp(this,'sourPrice')">
                                <option value="0">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td>(3oz)</td>
                        <td id="sourPrice"></td>
                    </tr>


                    <tr>
                        <td>guacamole</td>
                        <td>
                            <select name="quacQty" data-itemId="quac" onchange="calOrder.addUp(this,'quacPrice')">
                                <option value="0">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td>(3oz)</td>
                        <td id="quacPrice"></td>
                    </tr>


                    <tr>
                        <td>salsa</td>
                        <td>
                            <select name="salsaQty" data-itemId="salsa" onchange="calOrder.addUp(this,'salsaPrice')">
                                <option value="0">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <td>(3oz)</td>
                        <td id="salsaPrice"></td>
                    </tr>

<!-- 1st drink row -->
                    <tr>
                        <td>drink</td>
                        <td id="drinkQtyContain">
                            <select name="drinkQty" onchange="calOrder.onDrinkOrder(this.id)" id="selectDrinkQty">
                                <option value="0">-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>

                        <td>
                            <select class="drinkSizeSelect" style="display:none" name="drinkSizeSelect1" id="drinkSizeSelect1" onchange="calOrder.drinkSize(this)">
                                <option value="s">16oz(S)</option>
                                <option value="m">32oz(M)</option>
                                <option value="l">64oz(L)</option>
                            </select>
                        </td> 
                        <td>
                            <span class="drinkPrice" style="display:none" class="noMargin"></span>
                        </td>

                        <td>
                            <select class="drinkFlavorSelect" style="display:none" name="drinkFlavorSelect1" id="drinkFlavorSelect1">
                                <option value="c">coke</option>
                                <option value="dc">diet coke</option>
                                <option value="rb">root beer</option>
                                <option value="s">sprite</option>
                            </select>
                        </td>
                    </tr>

<!-- 2nd drink row -->
                    
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>          
                            <select class="drinkSizeSelect" style="display:none" name="drinkSizeSelect2" id="drinkSizeSelect2" onchange="calOrder.drinkSize(this)">
                                <option value="s">16oz(S)</option>
                                <option value="m">32oz(M)</option>
                                <option value="l">64oz(L)</option>
                            </select>
                        </td>
                        <td>
                            <span class="drinkPrice" style="display:none" class="noMargin"></span>
                        </td>
            
                        <td>
                            <select class="drinkFlavorSelect" style="display:none" name="drinkFlavorSelect2" id="drinkFlavorSelect2">
                                <option value="c">coke</option>
                                <option value="dc">diet coke</option>
                                <option value="rb">root beer</option>
                                <option value="s">sprite</option>
                            </select>
                        </td>
                    </tr>
<!-- 3rd drink row -->
                    
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        
                        <td>          
                            <select class="drinkSizeSelect" style="display:none" name="drinkSizeSelect3" id="drinkSizeSelect3" onchange="calOrder.drinkSize(this)">
                                <option value="s">16oz(S)</option>
                                <option value="m">32oz(M)</option>
                                <option value="l">64oz(L)</option>
                            </select>
                        </td>
                        <td>
                            <span class="drinkPrice" style="display:none" class="noMargin"></span>
                        </td>

                        <td>
                            <select class="drinkFlavorSelect" style="display:none" name="drinkFlavorSelect3" id="drinkFlavorSelect3">
                                <option value="c">coke</option>
                                <option value="dc">diet coke</option>
                                <option value="rb">root beer</option>
                                <option value="s">sprite</option>
                            </select>
                        </td>
                    </tr>
                        
<!-- 4th drink row -->  
                   
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      
                        <td>          
                            <select class="drinkSizeSelect" style="display:none" name="drinkSizeSelect4" id="drinkSizeSelect4" onchange="calOrder.drinkSize(this)">
                                <option value="s">16oz(S)</option>
                                <option value="m">32oz(M)</option>
                                <option value="l">64oz(L)</option>
                            </select>
                        </td>
                        <td>
                            <span class="drinkPrice" style="display:none" class="noMargin"></span>
                        </td>

                        <td>
                            <select class="drinkFlavorSelect" style="display:none" name="drinkFlavorSelect4" id="drinkFlavorSelect4">
                                <option value="c">coke</option>
                                <option value="dc">diet coke</option>
                                <option value="rb">root beer</option>
                                <option value="s">sprite</option>
                            </select>
                        </td>
                    </tr>

                </tbody>


                <tfoot>

                    <tr>
                        <td><b>&nbsp;</b></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>

                </tfoot>

            </form>
        </table>
    </div>
</div>
<script type="text/javascript" src="scripts/calculateOrder.js"></script>