<!-- Checkout Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="checkoutModal">How Would you Like to Pay?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="partials/_manageCart.php" method="post">
                    <div class="form-group">
                        <label for="CardNumber"><b>Card Number:</b></label>
                        <input class="form-control" id="C_number" name="C_Number" placeholder="Card Number" type="text" pattern="[0-9]+" required minlength="16" maxlength="16">
                    </div>
                    <div class="form-group">
                        <label for="CardHolderName"><b>Card Holder Name:</b></label>
                        <input class="form-control" id="C_name" name="C_name" pattern="^[a-zA-Z]+$" placeholder="Card Holder Name" type="text" required minlength="1" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="ExpireDate"><b>Expire Date:</b></label><br>
                        <label for="Month"><b>Month:</b></label>
                        <select name="c_month" limit="4">
                        <option value="none">NONE</option>
                            <option value="january">January</option>
                            <option value="february">February</option>
                            <option value="march">March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="august">August</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <option value="november">November</option>
                            <option value="december">December</option>
                        </select>&nbsp;
                        <label for="Year" limit="4"><b>Year:</b></label>
                        <select name="c_year">
                            <option value="none">NONE</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2031">2031</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="CVC"><b>Card Verification Code:</b></label>
                        <input class="form-control" id="CVC" placeholder="CVC" name="address" type="text" pattern="[0-9]+" required minlength="3" maxlength="3" width="10%">
                    </div>
                    <div class="form-group">
                        <label for="cashRegister"><b>Cash at Counter:</b></label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="dineIn" name="dine_in">
                            <label class="form-check-label" for="dineIn">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="takeout" name="take_out">
                            <label class="form-check-label" for="takeout">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="diningLocation"><b>Dining Location:</b></label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="dineIn" name="dine_in">
                            <label class="form-check-label" for="dineIn">Dine-in</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="takeout" name="take_out">
                            <label class="form-check-label" for="takeout">Takeout</label>
                        </div>
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <input type="hidden" name="amount" value="<?php echo $totalPrice ?>">
                        <button type="submit" name="checkout" class="btn btn-success">Proceed Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
