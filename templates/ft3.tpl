{include file='modules_header.tpl'}

  <table cellpadding="0" cellspacing="0">
  <tr>
    <td width="45"><img src="images/icon.png" width="34" height="34" /></td>
    <td class="title">
      <a href="../../admin/modules">{$LANG.word_modules}</a>
      <span class="joiner">&raquo;</span>
      <a href="./">{$L.module_name}</a>
      <span class="joiner">&raquo;</span>
      {$L.phrase_ft3_compatibility}
    </td>
  </tr>
  </table>

  {include file="messages.tpl"}

  <div class="margin_bottom_large">
    {$L.text_ft3_compatibility}
  </div>

  <table class="list_table" cellspacing="1" cellpadding="0" style="width: 600px">
  <tr>
    <th>{$L.word_test}</th>
    <th>{$L.word_result}</th>
    <th>{$L.word_result}</th>
  </tr>
  <tr>
    <td class="pad_left_small medium_grey">Compatible PHP Version</td>
    <td class="pad_left_small">{$php_version}</td>
    <td align="center">
        {if $php_version_compatible}
            <span class="green">{$LANG.word_pass|upper}</span>
        {else}
            <span class="red">{$LANG.word_fail|upper}</span>
        {/if}
    </td>
  </tr>
  <tr>
    <td class="pad_left_small medium_grey">PDO Available</td>
    <td class="pad_left_small">
        {if $pdo_available}
            {$LANG.word_yes}
        {else}
            {$LANG.word_no}
        {/if}
    </td>
    <td align="center">
        {if $pdo_available}
            <span class="green">{$LANG.word_pass|upper}</span>
        {else}
            <span class="red">{$LANG.word_fail|upper}</span>
        {/if}
    </td>
  </tr>
  <tr>
      <td class="pad_left_small medium_grey">PDO-MySQL extension available</td>
      <td class="pad_left_small">
          {if $pdo_mysql_available}
              {$LANG.word_yes}
          {else}
              {$LANG.word_no}
          {/if}
      </td>
      <td align="center">
          {if $pdo_mysql_available}
              <span class="green">{$LANG.word_pass|upper}</span>
          {else}
              <span class="red">{$LANG.word_fail|upper}</span>
          {/if}
      </td>
  </tr>
  </table>

    {if $php_version_compatible && $pdo_available && $pdo_mysql_available}

    <br />

    <p><b>Test Database Connection</b></p>

    <p>
        This attempts to make a database connection using PDO. By default PDO connects on port <b>3306</b>.
    </p>

    <p>
        Port:
        <input type="text" id="pdo_port" size="6" value="3306" />
        <input type="button" id="pdo_test_btn" value="{$L.phrase_run_test}" onclick="sc_ns.test_pdo_connection()" />
        <span id="pdo_test_loading"></span>
    </p>

    <div id="pdo_result_error" class="error pdo_result hidden">
        <div style="padding: 6px">
            Sorry, there was a problem connecting. Here's the error that was returned:
            <p><b id="pdo_result_error_msg"></b></p>
        </div>
    </div>

    <div id="pdo_result_success" class="notify pdo_result hidden">
        <div style="padding: 6px">
            Excellent! You will be able to upgrade to Form Tools 3 without making any changes to your configuration.
        </div>
    </div>

    <div id="pdo_result_success_with_port" class="notify pdo_result hidden">
        <div style="padding: 6px">
            Excellent! You will be able to upgrade to Form Tools 3 but will need to add the following setting to your
            <b>/global/config.php</b> file:
            <p><b>$g_db_port = <span id="custom_port"></span>;</b></p>
        </div>
    </div>

    {/if}

{include file='modules_footer.tpl'}
