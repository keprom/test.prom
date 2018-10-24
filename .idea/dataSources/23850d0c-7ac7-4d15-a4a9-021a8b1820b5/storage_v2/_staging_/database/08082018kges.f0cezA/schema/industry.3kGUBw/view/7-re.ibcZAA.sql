create or replace view "7-re" as
  SELECT
    "7-re 1".firm_id,
    "7-re 1".dogovor,
    "7-re 1".firm_name,
    "7-re 1".firm_ture_id,
    "7-re 1".debet_value,
    "7-re 1".kredit_value,
    (("7-re 1".nachisleno * ("7-re 1".nds + (100) :: numeric)) / (100) :: numeric)::numeric(24,4) AS nachisleno,
    "7-re 1".period_id,
    "7-re 1".subgroup_id,
    "7-re 1".begin_date,
    "7-re 1".end_date,
    ((sum(oplata.value) * ("7-re 1".nds + (100) :: numeric)) / (100) :: numeric)   AS oplata_value,
    "7-re 1".nds,
    "7-re 1".itogo_kvt,
    firm_subgroup.name                                                             AS subgroup_name
  FROM ((industry."7-re 1"
    LEFT JOIN industry.oplata ON ((((oplata.data >= "7-re 1".begin_date) AND (oplata.data <= "7-re 1".end_date)) AND
                                   (oplata.firm_id = "7-re 1".firm_id)))) LEFT JOIN industry.firm_subgroup
      ON (("7-re 1".subgroup_id = firm_subgroup.id)))
  WHERE ("7-re 1".dogovor <> ALL (ARRAY [1, 129]))
  GROUP BY "7-re 1".subgroup_id, "7-re 1".dogovor, firm_subgroup.name, "7-re 1".firm_name, "7-re 1".debet_value,
    "7-re 1".kredit_value, "7-re 1".nachisleno, "7-re 1".period_id, "7-re 1".begin_date,
    "7-re 1".end_date, "7-re 1".firm_id, oplata.nds, "7-re 1".nds, "7-re 1".firm_ture_id, "7-re 1".itogo_kvt
  ORDER BY "7-re 1".subgroup_id, "7-re 1".dogovor;

