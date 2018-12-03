    <div class="col-md-12 search-table-col">
        <div class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="text-left bill-header cs" style="background-color: #1485ee;">
                    <tr class="d-table-row">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Densitiy</th>
                        <th>Picture</th>
                        <th>Sign</th>
                        <th>Electric Insulator</th>
                        <th>Thermal Insulator</th>
                        <th>Phonic<br>Insulator</th>
                        <th>Inflamable</th>
                        <th>Mechanical Stress</th>
                        <th id="trs-hd" class="col-lg-2">Elon. at Break</th>
                        <th id="trs-hd" class="col-lg-3">Breaking Point</th>
                        <th id="trs-hd" class="col-lg-2">Ppkg</th>
                        <th id="trs-hd" class="col-lg-2">Melting Point</th>
                        <th id="trs-hd" class="col-lg-2">Youngs Module</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <form action="/php/update_mterial.php" method="post" class="form-horizontal">
                        <td><input type="hidden" name="ID" value=""/></td>
                        <td><input name="MATERIAL_NAME" type="text" class="form-control col-sm-2" /></td>
                        <td><input name="MATERIAL_CATEGORY" type="text" class="form-control input-lg" /></td>
                        <td><input name="MATERIAL_DENSITY" type="text" class="form-control input-sm" /></td>
                        <td><input type="radio"></td>
                        <td><input type="radio"></td>
                        <td><div class="form-check"><input name="MATERIAL_ELECTRICAL_INSULATOR" class="form-check-input" type="checkbox" value="1"></div></td>
                        <td><div class="form-check"><input name="MATERIAL_THERMAL_INSULATOR" class="form-check-input" type="checkbox" value="1"></div></td>
                        <td><div class="form-check"><input name="MATERIAL_PHONIC_INSULATOR" class="form-check-input" type="checkbox" value="1"></div></td>
                        <td><div class="form-check"><input name="MATERIAL_INFLAMABLE" class="form-check-input" type="checkbox" value="1"></div></td>
                        <td><input name="MATERIAL_MECHANICAL_STRESS" type="text" class="form-control input-md"></td>
                        <td><input name="MATERIAL_ELONGATION_AT_BREAK" type="text" class="form-control input-sm"></td>
                        <td><input name="MATERIAL_BREAKINGPOINT" type="text" class="form-control input-md"></td>
                        <td><input name="MATERIAL_PRICE_PER_KG" type="text" class="form-control input-md"></td>
                        <td><input name="MATERIAL_MELTINGPOINT" type="text" class="form-control input-md"></td>
                        <td><input name="MATERIAL_YOUNGS_MODULE" type="text" class="form-control input-md"></td>
                        <td>
                            <button class="btn btn-success" type="submit" name="edit" value="1" style="margin-left: 5px;"><i class="fa fa-check" style="font-size: 15px;"></i></button>
                            <button class="btn btn-danger" type="submit" name="delete" value="1" style="margin-left: 5px;"><i class="fa fa-trash" style="font-size: 15px;"></i></button>
                        </td>
                    </form>
                    </tr>
                    {{LIST_ALL_MATERIALS}}
                </tbody>
            </table>
        </div>
    </div>

