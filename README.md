## Entity Relationship Diagram (ERD)

```mermaid
erDiagram
    users ||--o{ leads : "has"
    leads ||--o{ contacts : "contains"

    users {
        bigint id PK
        string name
        string email
    }

    leads {
        bigint id PK
        bigint user_id FK
        string name
        string email
        string phone
        string status
    }

    contacts {
        bigint id PK
        bigint lead_id FK
        string name
        string email
        string phone
        string status
    }
