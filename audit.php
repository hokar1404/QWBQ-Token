<?php
$page_title = "Audit & Security Report";
include 'header.php';
?>

<main class="container">

  <h1>Audit & Security Report</h1>

  <section>
    <h2>1. Introduction & Purpose</h2>
    <p>This page presents an internal code review of the Quazenthor (QWBQ) smart contract for transparency and educational purposes.</p>
    <p>Quazenthor is a fixed-supply immutable BEP-20 token on BNB Smart Chain mainnet, serving as a live technical reference for studying standard token mechanics in a real blockchain environment.</p>
  </section>

  <section>
    <h2>2. Review Scope & Methodology</h2>
    <p>The review focused on the deployed smart contract code with emphasis on:</p>
    <ul>
      <li>Standard BEP-20 implementation</li>
      <li>Absence of custom logic, fees, taxes, minting or administrative functions</li>
      <li>Immutability and simplicity of the contract</li>
      <li>Consistency between verified source code and on-chain bytecode</li>
    </ul>
    <p>Verified Source Code: <a href="https://bscscan.com/address/0x013f5f2F7F5b027012415A783ac2ed69EF936aE8#code" target="_blank">View on BscScan</a></p>
  </section>

  <section>
    <h2>3. Key Findings</h2>
    <p>The contract is considered low-risk due to its minimal and standard design:</p>
    <ul>
      <li>Permanently fixed total supply – no mint or burn capability</li>
      <li>No transfer fees or taxation</li>
      <li>Ownership retained (no privileged functions)</li>
      <li>Fully immutable code</li>
      <li>Standard BEP-20 functions only</li>
    </ul>
  </section>

  <section>
    <h2>4. Website Security – SSL Certificate Verification</h2>
    <p>The official website uses a valid SSL certificate to ensure secure connections. Verification details (checked January 31, 2026):</p>
    <ul>
      <li>Hostname: quazenthor.com</li>
      <li>Valid From: January 31, 2026 to January 31, 2027</li>
      <li>Issuer: Certum DV TLS G2 R39 CA</li>
      <li>Status: Trusted by all major browsers</li>
    </ul>
  </section>

  <section>
    <h2>5. Official Verification Channels</h2>
    <ul>
      <li>Website: <a href="https://quazenthor.com">https://quazenthor.com</a></li>
      <li>Email: <a href="mailto:admin@quazenthor.com">admin@quazenthor.com</a></li>
      <li>BscScan Contract: Verified on 2026-01-31</li>
      <li>Ownership Verification: <a href="https://bscscan.com/verifySig/15181">Signature #15181 (Verified)</a></li>
    </ul>
  </section>

  <p style="text-align:center; margin:40px 0;">
    <a href="/index">⬅ Back to Home</a>
  </p>

</main>

</body>
</html>