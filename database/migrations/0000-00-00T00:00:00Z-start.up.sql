PRAGMA foreign_keys = ON;

PRAGMA journal_mode = WAL;

CREATE TABLE IF NOT EXISTS account_tbl (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS user_tbl (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT NOT NULL,
  preferred_name TEXT NOT NULL,
  account_id UUID NOT NULL,
  password TEXT,
  email TEXT UNIQUE NOT NULL,
  role TEXT CHECK(role IN ('basic', 'account-manager', 'administrator')) NOT NULL DEFAULT 'basic',
  FOREIGN KEY(account_id) REFERENCES account_tbl(id)
);
