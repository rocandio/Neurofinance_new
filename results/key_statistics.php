<?php 
  #    Output easy-to-read numbers
  #    by james at bandit.co.nz
  function f_number($n) {
    // first strip any formatting;
    $n = (0+str_replace(",","",$n));
        
    // is this a number?
    if(!is_numeric($n)) return false;
        
    // now filter it;
    if($n>1000000000000) return round(($n/1000000000000),1).' T';
    else if($n>1000000000) return round(($n/1000000000),1).' B';
    else if($n>1000000) return round(($n/1000000),1).' M';
    else if($n>1000) return round(($n/1000),1).' K';
    return number_format($n,2,'.',',');
    }
?>
<table width="590" id="table_keys" cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td colspan="3">
            <table border="0" cellspacing="0" class="head_table_keys">
              <tbody>
                <tr>
                  <td>
                    <h1>Key Statistics</h1>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        <tr valign="top">
          <td width="270" class="main_keys_heads">
            <table width="100%" class="main_keys_title" cellpadding="2"cellspacing="0" border="0">
              <tbody>
                <tr>
                  <th class="c4" align="left">
                    Valuation Measures
                  </th>
                  <th align="right">
                    &nbsp;
                  </th>
                </tr>
              </tbody>
            </table>
            <table class="main_keys_data" width="100%" cellpadding="0" cellspacing="0" border="0">
              <tbody>
                <tr>
                  <td>
                    <table width="100%" cellpadding="2" cellspacing="1" border="0">
                      <tbody>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Market Cap (<?php echo $info_keys->MarketCap->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <span id="data_keys"><?php echo f_number($info_keys->MarketCap->content);?></span>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Enterprise Value (<?php echo $info_keys->EnterpriseValue->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo f_number($info_keys->EnterpriseValue->content);?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Trailing P/E (<?php echo $info_keys->TrailingPE->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->TrailingPE->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Forward P/E (<?php echo $info_keys->ForwardPE->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->ForwardPE->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            PEG Ratio (<?php echo $info_keys->PEGRatio->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->PEGRatio->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Price/Sales (<?php echo $info_keys->PriceSales->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->PriceSales->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Price/Book (<?php echo $info_keys->PriceBook->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->PriceBook->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Enterprise Value/Revenue (<?php echo $info_keys->EnterpriseValueRevenue->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->EnterpriseValueRevenue->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Enterprise Value/EBITDA (<?php echo $info_keys->EnterpriseValueEBITDA->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->EnterpriseValueEBITDA->content;?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table width="100%" class="main_keys_title" cellpadding="2"
            cellspacing="0" border="0">
              <tbody>
                <tr>
                  <th class="c4" align="left">
                    Financial Highlights
                  </th>
                  <th align="right">
                    &nbsp;
                  </th>
                </tr>
              </tbody>
            </table>
            <table class="main_keys_data" width="100%" cellpadding="0" cellspacing=
            "0" border="0">
              <tbody>
                <tr>
                  <td>
                    <table width="100%" cellpadding="2" cellspacing="1" border="0">
                      <tbody>
                        <tr>
                          <td colspan="2" class="keys_th1">
                            Fiscal Year
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Fiscal Year Ends:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->FiscalYearEnds;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Most Recent Quarter (<?php echo $info_keys->MostRecentQuarter->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->MostRecentQuarter->content;?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="main_keys_data" width="100%" cellpadding="0" cellspacing="0" border="0">
              <tbody>
                <tr>
                  <td>
                    <table width="100%" cellpadding="2" cellspacing="1" border="0">
                      <tbody>
                        <tr>
                          <td colspan="2" class="keys_th1">
                            Profitability
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Profit Margin (<?php echo $info_keys->MostRecentQuarter->content;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->MostRecentQuarter->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Operating Margin (<?php echo $info_keys->OperatingMargin->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->OperatingMargin->content;?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="main_keys_data" width="100%" cellpadding="0" cellspacing=
            "0" border="0">
              <tbody>
                <tr>
                  <td>
                    <table width="100%" cellpadding="2" cellspacing="1" border="0">
                      <tbody>
                        <tr>
                          <td colspan="2" class="keys_th1">
                            Management Effectiveness
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Return on Assets (<?php echo $info_keys->ReturnonAssets->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->ReturnonAssets->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Return on Equity (<?php echo $info_keys->ReturnonEquity->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->ReturnonEquity->content;?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="main_keys_data" width="100%" cellpadding="0" cellspacing=
            "0" border="0">
              <tbody>
                <tr>
                  <td>
                    <table width="100%" cellpadding="2" cellspacing="1" border="0">
                      <tbody>
                        <tr>
                          <td colspan="2" class="keys_th1">
                            Income Statement
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Revenue (<?php echo $info_keys->Revenue->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo f_number($info_keys->Revenue->content);?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Revenue Per Share (<?php echo $info_keys->RevenuePerShare->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->RevenuePerShare->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Qtrly Revenue Growth (<?php echo $info_keys->QtrlyRevenueGrowth->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->QtrlyRevenueGrowth->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Gross Profit (<?php echo $info_keys->GrossProfit->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo f_number($info_keys->GrossProfit->content);?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            EBITDA (<?php echo $info_keys->EBITDA->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo f_number($info_keys->EBITDA->content);?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Net Income Avl to Common (<?php echo $info_keys->NetIncomeAvltoCommon->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo f_number($info_keys->NetIncomeAvltoCommon->content);?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Diluted EPS (<?php echo $info_keys->DilutedEPS->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->DilutedEPS->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Qtrly Earnings Growth (<?php echo $info_keys->QtrlyEarningsGrowth->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->QtrlyEarningsGrowth->content;?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="main_keys_data" width="100%" cellpadding="0" cellspacing=
            "0" border="0">
              <tbody>
                <tr>
                  <td>
                    <table width="100%" cellpadding="2" cellspacing="1" border="0">
                      <tbody>
                        <tr>
                          <td colspan="2" class="keys_th1">
                            Balance Sheet
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Total Cash (<?php echo $info_keys->TotalCash->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo f_number($info_keys->TotalCash->content);?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Total Cash Per Share (<?php echo $info_keys->TotalCashPerShare->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->TotalCashPerShare->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Total Debt (<?php echo $info_keys->TotalDebt->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo f_number($info_keys->TotalDebt->content);?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Total Debt/Equity (<?php echo $info_keys->TotalDebtEquity->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->TotalDebtEquity->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Current Ratio (<?php echo $info_keys->CurrentRatio->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->CurrentRatio->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Book Value Per Share (<?php echo $info_keys->BookValuePerShare->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->BookValuePerShare->content;?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="main_keys_data" width="100%" cellpadding="0" cellspacing=
            "0" border="0">
              <tbody>
                <tr>
                  <td>
                    <table width="100%" cellpadding="2" cellspacing="1" border="0">
                      <tbody>
                        <tr>
                          <td colspan="2" class="keys_th1">
                            Cash Flow Statement
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Operating Cash Flow (<?php echo $info_keys->OperatingCashFlow->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo f_number($info_keys->OperatingCashFlow->content);?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Levered Free Cash Flow (<?php echo $info_keys->LeveredFreeCashFlow->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo f_number($info_keys->LeveredFreeCashFlow->content);?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
           
          </td>
          <td></td>
          <td width="270"style="padding-left:20px;" class="table_info" align="center">
            
            <table width="100%" class="main_keys_title" cellpadding="2" cellspacing="0" border="0">
              <tbody>
                <tr>
                  <th class="c4" align="left">
                    Trading Information
                  </th>
                  <th align="right">
                    &nbsp;
                  </th>
                </tr>
              </tbody>
            </table>
            <table class="main_keys_data" width="100%" cellpadding="0" cellspacing=
            "0" border="0">
              <tbody>
                <tr>
                  <td>
                    <table width="100%" cellpadding="2" cellspacing="1" border="0">
                      <tbody>
                        <tr>
                          <td colspan="2" class="keys_th1">
                            Stock Price History
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Beta:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->Beta;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            52-Week Change<span class="foo">:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->p_52_WeekChange;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            S&amp;P500 52-Week Change:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->SP50052_WeekChange;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            52-Week High (<?php echo $info_keys->p_52_WeekHigh->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->p_52_WeekHigh->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            52-Week Low (<?php echo $info_keys->p_52_WeekLow->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->p_52_WeekLow->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            50-Day Moving Average:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->p_50_DayMovingAverage;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            200-Day Moving Average:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->p_200_DayMovingAverage;?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="main_keys_data" width="100%" cellpadding="0" cellspacing=
            "0" border="0">
              <tbody>
                <tr>
                  <td>
                    <table width="100%" cellpadding="2" cellspacing="1" border="0">
                      <tbody>
                        <tr>
                          <td colspan="2" class="keys_th1">
                            Share Statistics
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Avg Vol (<?php echo $info_keys->AvgVol[0]->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->AvgVol[0]->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Avg Vol (<?php echo $info_keys->AvgVol[1]->term;?>)
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->AvgVol[1]->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Shares Outstanding:
                          </td>
                          <td class="main_keys_out">
                            <?php echo f_number($info_keys->SharesOutstanding);?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Float:
                          </td>
                          <td class="main_keys_out">
                            <?php echo f_number($info_keys->Float);?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            % Held by Insiders<span class="foo">:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->PercentageHeldbyInsiders;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            % Held by Institutions:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->PercentageHeldbyInstitutions;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Shares Short (<?php echo $info_keys->SharesShort[0]->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo f_number($info_keys->SharesShort[0]->content);?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Short Ratio (<?php echo $info_keys->ShortRatio->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->ShortRatio->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Short % of Float (<?php echo $info_keys->ShortPercentageofFloat->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->ShortPercentageofFloat->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Shares Short (<?php echo $info_keys->SharesShort[1]->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo f_number($info_keys->SharesShort[1]->content);?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="main_keys_data" width="100%" cellpadding="0" cellspacing=
            "0" border="0">
              <tbody>
                <tr>
                  <td>
                    <table width="100%" cellpadding="2" cellspacing="1" border="0">
                      <tbody>
                        <tr>
                          <td colspan="2" class="keys_th1">
                            Dividends &amp; Splits
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Forward Annual Dividend Rate:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->ForwardAnnualDividendRate;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Forward Annual Dividend Yield<:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->ForwardAnnualDividendYield;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Trailing Annual Dividend Yield:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->TrailingAnnualDividendYield[0];?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Trailing Annual Dividend Yield:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->TrailingAnnualDividendYield[1];?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            5 Year Average Dividend Yield:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->p_5YearAverageDividendYield;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Payout Ratio:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->PayoutRatio;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Dividend Date:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->DividendDate;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Ex-Dividend Date:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->Ex_DividendDate;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Last Split Factor (<?php echo $info_keys->LastSplitFactor->term;?>):
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->LastSplitFactor->content;?>
                          </td>
                        </tr>
                        <tr>
                          <td class="main_keys_th" width="74%">
                            Last Split Date<span class="foo"></span>:
                          </td>
                          <td class="main_keys_out">
                            <?php echo $info_keys->LastSplitDate;?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table><br /><br />
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <table cellpadding="2" border="0" cellspacing="0" width="100%">
              <tbody>
                <!-- <tr>
                  <td align="left">
                    See <a href=
                    "http://help.yahoo.com/l/us/yahoo/finance/tools/fitakeystats.html">Key
                    Statistics Help</a> for definitions of terms used.
                  </td>
                </tr> -->
                <br /><br />
                <tr>
                  <td align="left">
                    <small><strong>Abbreviation Guide:</strong> <strong>K</strong> =
                    Thousands; <strong>M</strong> = Millions; <strong>B</strong> =
                    Billions</small><br />
                    <small><strong>mrq</strong> = Most Recent Quarter (as of Mar 31,
                    2013)</small><br />
                    <small><strong>ttm</strong> = Trailing Twelve Months (as of Mar 31,
                    2013)</small><br />
                    <small><strong>yoy</strong> = Year Over Year (as of Mar 31,
                    2013)</small><br />
                    <small><strong>lfy</strong> = Last Fiscal Year (as of Dec 31,
                    2012)</small><br />
                    <small><strong>fye</strong> = Fiscal Year Ending</small><br />
                    <small>Currency in USD.</small>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </br>
</br>