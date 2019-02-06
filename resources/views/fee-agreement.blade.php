@extends('master')
@section('content')
<form action="/fee-agreement" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<table  align="center" style="width:100%; max-width: 70%;     color: #27285e;
      ">
      <tbody>
        <tr>
          <td><h1 style="font-size: 23px; text-align: center; text-decoration: underline; margin-bottom: 40px;">
            Fee Agreement</h1>
          </td>
        </tr>
      </tbody>
    </table>
    <table border="1" align="center" style="width:100%;  border-collapse: collapse; max-width: 70%; border-color: #000; padding: 5px 10px;">
      <tbody>

          <tr>
            <td colspan="3" width="200">
              <p style="padding:5px 10px; margin:0; font-size:16px">This agreement is made between:</p>
            </td>
            <td colspan="3" width="228">
              <p style="padding:5px 10px; margin:0; font-size:16px">
                <input type="text" style="border: 1px solid #707070; width: 70%; padding: 9px; display: inline-block;vertical-align: top;" name="agreement-between">&nbsp;</p>
            </td>
          </tr>
          <tr>
            <td colspan="3" width="200">
              <p style="padding:5px 10px; margin:0; font-size:16px">and</p>
            </td>
            <td colspan="3" width="228">
              <p style="padding:5px 10px; margin:0; font-size:16px">
                <input type="text" style="border: 1px solid #707070; width: 70%; padding: 9px; display: inline-block;vertical-align: top;" name="agreement-and">&nbsp;</p>
            </td>
          </tr>
          <tr>
            <td colspan="3" width="200">
              <p style="padding:5px 10px; margin:0; font-size:16px">Whole address for correspondence is:                                                                      </p>
            </td>
            <td colspan="3" width="228">
              <p style="padding:5px 10px; margin:0; font-size:16px">
                <input type="text" name="address" style="border: 1px solid #707070; width: 70%; padding: 9px; display: inline-block;vertical-align: top;">&nbsp;</p>
            </td>
          </tr>
      </tbody>
    </table>
    <table style="width:100%; margin:auto;   max-width: 70%; border-color: #000; padding: 5px 10px;">
      <tr>
        <td>
          <ol>
            <li style="margin-bottom: 20px;">This agreement is supplementary to the ‘Terms of Business’ document and sets out the basis on which the Adviser will charge for the services.</li>
            <li style="margin-bottom: 20px;">This document will confirm the terms of the conversation regarding the services the Adviser will provide.</li>
            <li style="margin-bottom: 20px;">As a first step, the Client is to provide complete and up-to-date information of your personal circumstances, with your requirements and objectives. The Adviser will make this task easier by providing information forms for you to complete or assist with their completion or complete them on your behalf, and then clarify the information in our meeting.</li>
            <li style="margin-bottom: 20px;">The Client shall provide to the Adviser such information as the Adviser shall request to enable the Adviser to provide the service requested by you.</li>
            <li style="margin-bottom: 20px;"><strong>The Adviser, shall provide to the Client the following service :-</strong>
            The Adviser will recommend a product with an appropriate lender which is nearest to that as stated by the client taking into consideration the information provided as in section 3. The Adviser will then provide analysis and recommended actions. The Adviser will confirm the recommendation in the form of a Confirmation Letter.</li>
            <li style="margin-bottom: 20px;">When you receive the recommendation, it will be your decision alone to implement the recommendations, either completely or in part.  </li>
            <li style="margin-bottom: 20px;">Implementation of your recommendations by acquiring financial products is entirely by your own choice. </li>
            <li style="margin-bottom: 20px;">We are not authorised or qualified to give legal advice or to prepare legal documents for you. </li>
            <li style="margin-bottom: 20px;">Fees
              All the time spent on your work undertaken, as agreed within clause 5 will be charged at £
              Commissions/Procuration Fee
              Any commissions/Procuration Fee received during the course of this Agreement from a lender or from an insurance will, but will be retained by the adviser.
            No fees will be refunded under this agreement unless specifically stated in section of the ‘Terms of Business’ document.</li>
            <li style="margin-bottom: 20px;">Should further work be required outside this Agreement, a fresh letter will be issued to ensure that no misunderstanding can arise between us.</li>
            <li style="margin-bottom: 20px;">This agreement shall terminate automatically, following the provision of the service supplied in section 5 to the Client.</li>
            <li style="margin-bottom: 20px;">If you understand the above terms and agree to them, please sign both copies of this letter, and return one to the Adviser.</li>
            <li style="margin-bottom: 20px;">
            You, the Client, shall not be entitled to assign or transfer the benefit of this Agreement</li>
            <li style="margin-bottom: 20px;">Any notice to be given under this Agreement shall be in writing and shall be deemed to have been duly given if left or sent by first class post or registered post to a party at the address shown above, and shall be deemed to have been received by the addressee two working days following despatch of the notice, or if by hand, simultaneously with delivery.  To prove the giving of notice, it shall be sufficient to show that it was despatched.  </li>
            <li style="margin-bottom: 20px;">The validity, construction and performance of this Agreement shall be governed by English Law.</li>
            <li style="margin-bottom: 20px;">Save where with reasonable foresight the breach could have been avoided, neither party shall be liable to the other for any loss or damage outside the reasonable control of both parties</li>
          </ol>
          <p>We look forward to working with you towards the achievements of your financial goals.</p>
          <p>&nbsp;</p>
          <h3>Name of Adviser</h3>
          <p><strong>&nbsp;</strong></p>
          <p><strong>Signature Adviser________________________________Date__________________</strong></p>
          <p><strong>&nbsp;</strong></p>
          <p><strong>Signature Client 1________________________________Date__________________</strong></p>
          <p><strong>&nbsp;</strong></p>
          <p><strong>Signature Client 2________________________________Date___________________</strong></p>
        </td>
      </tr>
        <tr>
            <td>
                    <span><i class="far fa-file-pdf"></i></span>
                    <button type="submit" class="download-pdf">Download PDF <i class="fas fa-download"></i></button>
            </td>
        </tr>      
    </table>
</form>
@endsection