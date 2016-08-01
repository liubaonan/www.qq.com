ls_member_ent_brandinfo   memberid     brandname   jianpin     joinregion(加盟区域)  
ls_member_ent_info               memberid     industry    subindustry    area(公司所在地区) 
ls_class_industry         id           pathname


select a.memberid,a.brandname,a.jianpin,a.joinregion,b.memberid,b.industry,b.subindustry,b.area,c.id,c.pathname from 
ls_member_ent_brandinfo as a,ls_member_ent_info as b,ls_class_industry as c where a.memberid=b.memberid and b.industry=c.id

b.createtime  b.companyname  c.industryname  c.subindustryname  


