var client = new RestClient("https://rest.facturame.mx/api/v3/businesses/cfdi/v33.json");
var request = new RestRequest(Method.POST);
request.AddHeader("x-access-token", "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJBQUEwMTAxMDFBQUEiLCJleHAiOjE1MjI5NDQ1OTR9.CiieMYi7392dsMRot-S-58DDOUwutYsUi_oMiPdAGq0");
request.AddHeader("content-type", "application/json");
request.AddParameter("application/json", "{\n\t\"cfdi\": {\n\t\t\"ref_id\": \"123\",\n\t\t\"document\": \"PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiID8+DQo8Y2ZkaTpDb21wcm9iYW50ZSB4bWxuczp0ZENGREk9Imh0dHA6Ly93d3cuc2F0LmdvYi5teC9zaXRpb19pbnRlcm5ldC9jZmQvdGlwb0RhdG9zL3RkQ0ZESSINCiAgICB4bWxuczpjZmRpPSJodHRwOi8vd3d3LnNhdC5nb2IubXgvY2ZkLzMiDQogICAgeHNpOnNjaGVtYUxvY2F0aW9uPSJodHRwOi8vd3d3LnNhdC5nb2IubXgvY2ZkLzMgaHR0cDovL3d3dy5zYXQuZ29iLm14L3NpdGlvX2ludGVybmV0L2NmZC8zL2NmZHYzMy54c2QiDQogICAgeG1sbnM6eHNpPSJodHRwOi8vd3d3LnczLm9yZy8yMDAxL1hNTFNjaGVtYS1pbnN0YW5jZSINCiAgICB4bWxuczp0ZmQ9Imh0dHA6Ly93d3cuc2F0LmdvYi5teC9UaW1icmVGaXNjYWxEaWdpdGFsIiBMdWdhckV4cGVkaWNpb249IjA2MzAwIiBNb25lZGE9Ik1YTiINCiAgICBDZXJ0aWZpY2Fkbz0iIg0KICAgIEZlY2hhPSIyMDE3LTA1LTAyVDEwOjE1OjQ5IiBGb2xpbz0iNDExOSIgRm9ybWFQYWdvPSIwMSIgTWV0b2RvUGFnbz0iUFVFIg0KICAgIE5vQ2VydGlmaWNhZG89IjIwMDAxMDAwMDAwMjAwMDAxNDI4Ig0KICAgIFNlbGxvPSIiDQogICAgU2VyaWU9IkIiIFN1YlRvdGFsPSI2MTYuMzciIFRpcG9EZUNvbXByb2JhbnRlPSJJIiBUb3RhbD0iNzE0Ljk5IiBWZXJzaW9uPSIzLjMiPg0KICAgIDxjZmRpOkVtaXNvciBOb21icmU9IkVtcHJlc2EgVEVTVCBFbWlzb3IgU0EgZGUgQ1YiIFJmYz0iQUFBMDEwMTAxQUFBIiBSZWdpbWVuRmlzY2FsPSI2MDEiLz4NCiAgICA8Y2ZkaTpSZWNlcHRvciBOb21icmU9IkVtcHJlc2EgVEVTVCBSZWNlcHRvciBTQSBkZSBDViIgUmZjPSJYQVhYMDEwMTAxMDAwIiBVc29DRkRJPSJHMDMiLz4NCiAgICA8Y2ZkaTpDb25jZXB0b3M+DQogICAgICAgIDxjZmRpOkNvbmNlcHRvIENsYXZlUHJvZFNlcnY9IjAxMDEwMTAxIiBDYW50aWRhZD0iMSIgRGVzY3JpcGNpb249IkFydGljdWxvIFRlc3QgMDAxIg0KICAgICAgICAgICAgSW1wb3J0ZT0iNjE2LjM3IiBDbGF2ZVVuaWRhZD0iRTQ4IiBVbmlkYWQ9IlNlcnZpY2lvIiBWYWxvclVuaXRhcmlvPSI2MTYuMzciPg0KICAgICAgICAgICAgPGNmZGk6SW1wdWVzdG9zPg0KICAgICAgICAgICAgICAgIDxjZmRpOlRyYXNsYWRvcz4NCiAgICAgICAgICAgICAgICAgICAgPGNmZGk6VHJhc2xhZG8gQmFzZT0iNjE2LjM3IiBUaXBvRmFjdG9yPSJUYXNhIiBUYXNhT0N1b3RhPSIwLjE2MDAwMCINCiAgICAgICAgICAgICAgICAgICAgICAgIEltcHVlc3RvPSIwMDIiIEltcG9ydGU9Ijk4LjYyIi8+DQogICAgICAgICAgICAgICAgPC9jZmRpOlRyYXNsYWRvcz4NCiAgICAgICAgICAgIDwvY2ZkaTpJbXB1ZXN0b3M+DQogICAgICAgICAgICA8Y2ZkaTpQYXJ0ZSBDbGF2ZVByb2RTZXJ2PSIwMTAxMDEwMSIgTm9JZGVudGlmaWNhY2lvbj0iQ09EMDUiIENhbnRpZGFkPSIxLjAwIg0KICAgICAgICAgICAgICAgIFVuaWRhZD0iUGllemEiIERlc2NyaXBjaW9uPSJQYXJ0ZSAxIiBWYWxvclVuaXRhcmlvPSIxMDAuMDAiIEltcG9ydGU9IjEwMC4wMCI+DQogICAgICAgICAgICAgICAgPGNmZGk6SW5mb3JtYWNpb25BZHVhbmVyYSBOdW1lcm9QZWRpbWVudG89IjE3ICAwMSAgMzE3MyAgNzEyMzQ1NiIvPg0KICAgICAgICAgICAgPC9jZmRpOlBhcnRlPg0KICAgICAgICA8L2NmZGk6Q29uY2VwdG8+DQogICAgPC9jZmRpOkNvbmNlcHRvcz4NCiAgICA8Y2ZkaTpJbXB1ZXN0b3MgVG90YWxJbXB1ZXN0b3NUcmFzbGFkYWRvcz0iOTguNjIiPg0KICAgICAgICA8Y2ZkaTpUcmFzbGFkb3M+DQogICAgICAgICAgICA8Y2ZkaTpUcmFzbGFkbyBJbXBvcnRlPSI5OC42MiIgSW1wdWVzdG89IjAwMiIgVGlwb0ZhY3Rvcj0iVGFzYSIgVGFzYU9DdW90YT0iMC4xNjAwMDAiLz4NCiAgICAgICAgPC9jZmRpOlRyYXNsYWRvcz4NCiAgICA8L2NmZGk6SW1wdWVzdG9zPg0KPC9jZmRpOkNvbXByb2JhbnRlPg0K\"\n\t}\n}", ParameterType.RequestBody);
IRestResponse response = client.Execute(request);