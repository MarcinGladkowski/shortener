---

### 🧠 **Challenge: Build a Scalable URL Shortener API**

#### 🎯 **Goal**
Develop a scalable URL shortener service similar to Bit.ly or TinyURL, with a RESTful API interface.

---

### 📋 **Requirements**

1. **Shorten URL Endpoint**
    - `POST /shorten`
    - Input: JSON with a long URL (e.g., `https://example.com/some/long/path`)
    - Output: JSON with a unique short code (e.g., `https://short.ly/aB3xZ`)

2. **Redirect Endpoint**
    - `GET /{short_code}`
    - Redirects to the original long URL

3. **Analytics Endpoint (Bonus)**
    - `GET /stats/{short_code}`
    - Returns JSON with stats: number of redirects, creation date, last accessed

---

### 💡 **Key Expectations**

- Use **modern PHP (8.1+)** with strict types
- Apply **SOLID principles** and **OOP best practices**
- Use a **simple router or micro-framework** (Slim, Lumen, or Symfony Console is fine too)
- **MySQL or SQLite** for storage (bonus: use Redis for caching stats or lookups)
- Handle **collision prevention**, **validation**, and **error handling** gracefully
- Unit test at least the core service logic

---

### ✅ **Bonus Points**

- Use **Docker** for local setup
- Provide **OpenAPI (Swagger) docs**
- Add **rate limiting** (even simple middleware-based)
- Implement **CLI tool** to purge old or unused short codes
- Follow **PSR-12** code style and provide instructions to run a linter

---

### 📦 Submission

- Submit a GitHub repo or ZIP file
- Include a `README.md` with setup instructions, design decisions, and API usage examples

---

Would you like me to generate a starter template or GitHub README structure for this too?

### Run
```symfony serve:start```