BEGIN;
ALTER TABLE member
    ADD COLUMN nname character varying(255);
COMMIT;