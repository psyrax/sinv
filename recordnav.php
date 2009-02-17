   <?php if ($vista=="fichas") { //  ?> <table border="0" width="50%" align="center">
      <tr>
        <td width="23%" align="center"><?php if ($pageNum_ver > 0) { // Show if not first page ?>
              <a href="<?php printf("%s?pageNum_ver=%d%s", $currentPage, 0, $queryString_ver); ?>">First</a>
              <?php } // Show if not first page ?>
        </td>
        <td width="31%" align="center"><?php if ($pageNum_ver > 0) { // Show if not first page ?>
              <a href="<?php printf("%s?pageNum_ver=%d%s", $currentPage, max(0, $pageNum_ver - 1), $queryString_ver); ?>">Previous</a>
              <?php } // Show if not first page ?>
        </td>
        <td width="23%" align="center"><?php if ($pageNum_ver < $totalPages_ver) { // Show if not last page ?>
              <a href="<?php printf("%s?pageNum_ver=%d%s", $currentPage, min($totalPages_ver, $pageNum_ver + 1), $queryString_ver); ?>">Next</a>
              <?php } // Show if not last page ?>
        </td>
        <td width="23%" align="center"><?php if ($pageNum_ver < $totalPages_ver) { // Show if not last page ?>
              <a href="<?php printf("%s?pageNum_ver=%d%s", $currentPage, $totalPages_ver, $queryString_ver); ?>">Last</a>
              <?php } // Show if not last page ?>
        </td>
      </tr>
    </table><?php } //?>