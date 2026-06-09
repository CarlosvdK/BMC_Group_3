# Foundry — Group 3 Web Project

**Foundry** is a curated co-founder matching platform (see `assignment/BMC_Group_3.pdf`).
This repo holds our ESADE *Development Tools for Web & Mobile Apps* project plus all the
course session materials we used as reference.

The actual web application lives in **[`foundry/`](foundry/)**.

---

## What's in this repo

| Folder | Contents |
|--------|----------|
| `foundry/` | **Our web app** — the thing we build and submit |
| `assignment/` | `BMC_Group_3.pdf` (our business idea) and `Web Project.pdf` (the assignment brief) |
| `S1`, `S3`–`S8` | Course session materials (slides + example code) for reference |

---

## The app (`foundry/`)

Built with **only** the tools taught in the course: HTML, CSS, vanilla JavaScript,
procedural PHP (`mysqli`), and MySQL. It mirrors the Task Manager reference app from
sessions 6–8, so it runs on the same **MAMP** (local) and **Plesk** (server) setup.

### The two mandatory functionalities
1. **User registration & login** → `new_user.html` → `user_reg.php`, and `login.html` → `verify.php`
2. **Product/service catalog list** → `members.php` (the **Founder Directory** — lists all registered founders)

### File overview
| File | Role |
|------|------|
| `db.php` | DB connection + session. **The only file you edit per server.** |
| `foundry.sql` | Database dump — import via phpMyAdmin |
| `style.css` | Shared styling for every page |
| `index.html` | Homepage (business idea) |
| `how_it_works.html` | How it works + FAQ |
| `events.html` | Events list |
| `new_user.html` / `user_reg.php` | Registration form + insert logic |
| `login.html` / `verify.php` | Login form + credential check |
| `members.php` | Founder Directory (catalog list, login required) |
| `logout.php` | Logs the user out |
| `error_login.html`, `user_exist.html`, `query_error.html` | Info / error pages |

---

## Run it locally (MAMP)

1. Install and start **MAMP** (Start Servers).
2. Copy the `foundry` folder into MAMP's `htdocs` folder.
3. Open phpMyAdmin: `http://localhost/phpMyAdmin/?lang=en`
4. **Import** tab → choose `foundry/foundry.sql` → Go. (It creates the `foundry` database and a `users` table with 4 sample founders.)
5. `db.php` already uses `root` / `root` (the MAMP default), so no edit needed locally.
6. Open `http://localhost/foundry/index.html`

**Test login:** `marta` / `marta@123`  •  admin: `admin` / `admin@123`

> Tip: if MAMP's Apache is on port 80 and won't start without admin rights, you can also
> serve it with PHP's built-in server from inside the `foundry/` folder:
> `php -S localhost:8000` then open `http://localhost:8000/index.html` (MySQL must be running).

---

## Deploy to Plesk (same 7 steps as the course guide — see `S8/DOC_2_Deploying_to_Plesk.pdf`)

1. Log in to Plesk.
2. **Databases → Add Database** → name it `foundry`.
3. **Add a database user** (note the username + password).
4. phpMyAdmin → **Import** → upload `foundry.sql`.
5. Edit `db.php`: replace `root` / `root` with your DB username / password.
6. **File Manager → httpdocs** → new directory `foundry` → upload all files from `foundry/`.
7. Open `http://your-domain/foundry/index.html`.

---

## How to continue (ideas / TODO for the team)

The current app fully satisfies the mandatory requirements. Possible next steps, all doable with course tools:

- [ ] **Edit profile** — let a logged-in founder update their own row (`edit.php` + `modify.php`, like the Task Manager's edit flow).
- [ ] **Filter the directory** — add a dropdown/form to filter founders by `role`, `city`, or `industry` (a `SELECT ... WHERE` driven by `$_GET`).
- [ ] **Admin view** — if `$_SESSION['admin'] == 1`, show extra controls (e.g., delete a member), like the Task Manager admin.
- [ ] **More Apply fields** — extend the form/`users` table with the remaining BMC "Apply" sections (LinkedIn, runway, behavioral questions).
- [ ] **Polish static pages** — flesh out Events and Founder Stories per the BMC website concept.

### Ground rules (keep it submission-safe)
- Stick to **HTML / CSS / vanilla JS / procedural PHP (`mysqli`) / MySQL** only. No frameworks, npm, or PDO.
- Every PHP page that touches the DB starts with `include('db.php');`.
- Keep all new files inside `foundry/` so deployment stays a single folder.

### Working on it
```bash
git clone https://github.com/CarlosvdK/BMC_Group_3.git
cd BMC_Group_3
# make changes inside foundry/
git add .
git commit -m "describe your change"
git push
```
