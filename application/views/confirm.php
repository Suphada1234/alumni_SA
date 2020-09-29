<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php

  echo '<table id="table_details" class="table table-striped table-bordered" style="width:100%">';
        echo'<thead>
                <tr>
                    <td>ที่อยู่</td>
                    <td colspan="2">';echo $contact['address']; echo' </td>
                </tr>
                <tr>
                    <td>เบอร์โทรศัพท์</td>
                    <td colspan="2">';echo $contact['tel']; echo' </td>
                </tr>
            </tbody>';
?>