USE TALKUP;
ALTER TABLE PUNTAJES DROP COLUMN IF EXISTS ID;
ALTER TABLE PUNTAJES ADD COLUMN IF NOT EXISTS ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT;