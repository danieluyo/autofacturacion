<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://rest.facturame.mx/api/v3/businesses/cfdi/v33.json",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n\t\"cfdi\": {\n\t\t\"ref_id\": \"123\",\n\t\t\"document\": \"PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiID8+DQo8Y2ZkaTpDb21wcm9iYW50ZSB4bWxuczp0ZENGREk9Imh0dHA6Ly93d3cuc2F0LmdvYi5teC9zaXRpb19pbnRlcm5ldC9jZmQvdGlwb0RhdG9zL3RkQ0ZESSIgeG1sbnM6Y2ZkaT0iaHR0cDovL3d3dy5zYXQuZ29iLm14L2NmZC8zIiB4c2k6c2NoZW1hTG9jYXRpb249Imh0dHA6Ly93d3cuc2F0LmdvYi5teC9jZmQvMyBodHRwOi8vd3d3LnNhdC5nb2IubXgvc2l0aW9faW50ZXJuZXQvY2ZkLzMvY2ZkdjMzLnhzZCIgeG1sbnM6eHNpPSJodHRwOi8vd3d3LnczLm9yZy8yMDAxL1hNTFNjaGVtYS1pbnN0YW5jZSIgeG1sbnM6dGZkPSJodHRwOi8vd3d3LnNhdC5nb2IubXgvVGltYnJlRmlzY2FsRGlnaXRhbCIgTHVnYXJFeHBlZGljaW9uPSIwNjMwMCIgTW9uZWRhPSJNWE4iIENlcnRpZmljYWRvPSIiIERlc2N1ZW50bz0iMC4wMCIgRmVjaGE9IjIwMTctMDUtMDJUMTA6MTU6NDkiIEZvbGlvPSI0MTE5IiBGb3JtYVBhZ289IjAxIiBNZXRvZG9QYWdvPSJQVUUiIE5vQ2VydGlmaWNhZG89IjIwMDAxMDAwMDAwMjAwMDAxNDI4IiBTZWxsbz0iIiBTZXJpZT0iQiIgU3ViVG90YWw9IjYxNi4zNyIgVGlwb0RlQ29tcHJvYmFudGU9IkkiIFRvdGFsPSI3MTUuMDAiIFZlcnNpb249IjMuMyI+DQogICAgPGNmZGk6RW1pc29yIE5vbWJyZT0iRW1wcmVzYSBURVNUIEVtaXNvciBTQSBkZSBDViIgUmZjPSJBQUEwMTAxMDFBQUEiIFJlZ2ltZW5GaXNjYWw9IjYwMSIvPg0KICAgIDxjZmRpOlJlY2VwdG9yIE5vbWJyZT0iRW1wcmVzYSBURVNUIFJlY2VwdG9yIFNBIGRlIENWIiBSZmM9IlhBWFgwMTAxMDEwMDAiLz4NCiAgICA8Y2ZkaTpDb25jZXB0b3M+DQogICAgICAgIDxjZmRpOkNvbmNlcHRvIENsYXZlUHJvZFNlcnY9IjAxMDEwMTAxIiBDYW50aWRhZD0iMSIgRGVzY3JpcGNpb249IkFydGljdWxvIFRlc3QgMDAxIiBJbXBvcnRlPSI2MTYuMzciIENsYXZlVW5pZGFkPSJFNDgiIFVuaWRhZD0iU2VydmljaW8iIFZhbG9yVW5pdGFyaW89IjYxNi4zNyI+DQogICAgICAgICAgICA8Y2ZkaTpJbXB1ZXN0b3M+DQogICAgICAgICAgICAgICAgPGNmZGk6VHJhc2xhZG9zPg0KICAgICAgICAgICAgICAgICAgICA8Y2ZkaTpUcmFzbGFkbyBCYXNlPSI2MTYuMzciIFRpcG9GYWN0b3I9IlRhc2EiIFRhc2FPQ3VvdGE9IjAuMTYwMDAwIiBJbXB1ZXN0bz0iMDAyIiBJbXBvcnRlPSI5OC42MiIvPg0KICAgICAgICAgICAgICAgIDwvY2ZkaTpUcmFzbGFkb3M+DQogICAgICAgICAgICA8L2NmZGk6SW1wdWVzdG9zPg0KICAgICAgICA8Y2ZkaTpQYXJ0ZSBDbGF2ZVByb2RTZXJ2PSIwMTAxMDEwMSIgTm9JZGVudGlmaWNhY2lvbj0iQ09EMDUiIENhbnRpZGFkPSIxLjAwIiBVbmlkYWQ9IlBpZXphIiBEZXNjcmlwY2lvbj0iUGFydGUgMSIgVmFsb3JVbml0YXJpbz0iMTAwLjAwIiBJbXBvcnRlPSIxMDAuMDAiPg0KICAgICAgICA8Y2ZkaTpJbmZvcm1hY2lvbkFkdWFuZXJhIE51bWVyb1BlZGltZW50bz0iMTcgIDAxICAzMTczICA3MTIzNDU2Ii8+DQogICAgICA8L2NmZGk6UGFydGU+DQogICAgICAgIDwvY2ZkaTpDb25jZXB0bz4NCiAgICA8L2NmZGk6Q29uY2VwdG9zPg0KICAgIDxjZmRpOkltcHVlc3RvcyBUb3RhbEltcHVlc3Rvc1RyYXNsYWRhZG9zPSI5OC42MiI+DQogICAgICAgIDxjZmRpOlRyYXNsYWRvcz4NCiAgICAgICAgICAgIDxjZmRpOlRyYXNsYWRvIEltcG9ydGU9Ijk4LjYyIiBJbXB1ZXN0bz0iMDAyIiBUaXBvRmFjdG9yPSJUYXNhIiBUYXNhT0N1b3RhPSIwLjE2MDAwMCIvPg0KICAgICAgICA8L2NmZGk6VHJhc2xhZG9zPg0KICAgIDwvY2ZkaTpJbXB1ZXN0b3M+DQo8L2NmZGk6Q29tcHJvYmFudGU+DQo=\"\n\t}\n}",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/json",
    "x-access-token: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJBQUEwMTAxMDFBQUEiLCJleHAiOjE1MjI5NDQ1OTR9.CiieMYi7392dsMRot-S-58DDOUwutYsUi_oMiPdAGq0"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}