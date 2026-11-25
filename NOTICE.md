# Third-party API and trademark notices

This is an **independent, unofficial** client library. It is not affiliated with, endorsed by, or supported by Twilio or SendGrid.

- SendGrid, Twilio and their service names belong to their owners; the MIT license grants no rights to them and does not sublicense the SendGrid API or its terms. Twilio publishes an official PHP library (`sendgrid/sendgrid`); this one is generated from the contract.
- SendGrid publishes its API as 46 separate OpenAPI documents, one per product, in <https://github.com/twilio/sendgrid-oai> (`spec/json`, MIT license). `contract/sendgrid.json` is those 46 documents merged into one by a script: paths are the union (240, none collide); a component with the same name but a different definition in several documents is renamed with the product name as prefix, and every reference to it is rewritten; an operationId used by more than one document takes the product name as suffix (29 renamed). Identical components were merged. The servers are the global one and the EU one. The document is otherwise unchanged; where the generator found defects it repaired them and the generation report lists each.
- Using the API requires a SendGrid API key and compliance with its terms. The EU regional server is `https://api.eu.sendgrid.com`.
- Provided without warranty.
