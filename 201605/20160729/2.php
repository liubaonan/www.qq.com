source mysql
{
        type                                    = mysql
        sql_host                                = 192.168.9.118
        sql_user                                = BhI1Amhg
        sql_pass                                = BhI1Amhg04wwdhdk
        sql_db                                  = X1sNfvYG
        sql_port                                = 3306
        sql_query_pre                           = SET NAMES utf8

        sql_query_pre                           = SET SESSION query_cache_type=OFF
        sql_query_pre                           = REPLACE INTO sph_counter SELECT 1, MAX(memberid) FROM ls_member_ent_brandinfo
        sql_query                               = select i.memberid,i.companyname,brandname, i.industry,i.subindustry,b.orderid,b.cindex from ls_member_ent_info i inner join ls_member_base a on a.memberid=i.memberid and a.delstatus!=0 and i.status=1 and i.industry>0 inner join ls_member_ent_brandinfo b on i.memberid=b.memberid left join ls_member_ent_joininfo j on i.memberid=j.memberid left join ls_member_ent_joinline l on b.investment=l.joinlineid left join (select distinct member_id,pubType from ls_ad_banner where  pubType="1" and status="1" ) ad on i.memberid=ad.member_id where  i.memberid<=( SELECT max_doc_id FROM sph_counter WHERE counter_id=1 )

        sql_attr_uint                           = companyname
        sql_attr_str2ordinal                    = cindex
        sql_attr_str2ordinal                    = orderid
        #sql_attr_timestamp                     = date_added
#       #sql_query_info                         = SELECT * FROM ls_member_ent_brandinfo as b WHERE b.memberid = $memberid
}

source mysqlthrottled : mysql
{
        type                                    = mysql
        sql_host                                = 192.168.9.118
        sql_user                                = BhI1Amhg
        sql_pass                                = BhI1Amhg04wwdhdk
        sql_db                                  = X1sNfvYG
        sql_port                                = 3306
        sql_query_pre                           = SET NAMES utf8

        sql_query_pre                           = SET SESSION query_cache_type=OFF

        sql_query_pre                           = select i.memberid,i.companyname,brandname, i.industry,i.subindustry,bisproduct,b.orderid,b.cindex from ls_member_ent_info i inner join ls_member_base a on a.memberid=i.memberid and a.delstatus!=0 and i.status=1 and i.industry>0 inner join ls_member_ent_brandinfo b on i.memberid=b.memberid left join ls_member_ent_joininfo j on i.memberid=j.memberid left join ls_member_ent_joinline l on b.investment=l.joinlineid left join (select distinct member_id,pubType from ls_ad_banner where  pubType="1" and status="1" ) ad on i.memberid=ad.member_id where b.memberid!=55301 and i.memberid>( SELECT max_doc_id FROM sph_counter WHERE counter_id=1 )

        sql_attr_uint                           = companyname
        sql_attr_str2ordinal                    = cindex
        sql_attr_str2ordinal                    = orderid
        #sql_attr_timestamp                     = date_added
        #sql_query_info                         = SELECT * FROM ls_member_ent_brandinfo as b WHERE b.memberid = $memberid
}

source news
{
        type                                    = mysql
        sql_host                                = 192.168.9.118
        sql_user                                = BhI1Amhg
        sql_pass                                = BhI1Amhg04wwdhdk
        sql_db                                  = X1sNfvYG
        sql_port                                = 3306
        sql_query_pre                           = SET NAMES utf8
        sql_query_pre                           = SET SESSION query_cache_type=OFF
        #sql_query_pre                          = REPLACE INTO sph_counter SELECT 1, MAX(memberid) FROM ls_member_ent_brandinfo
        sql_query                               = select n.newsid,n.title,n.ctime,UNIX_TIMESTAMP(n.ctime) as date,CRC32(n.deflag) as crc32_showstatus  from ls_news_arc n,ls_news_text t where n.newsid=t.news_id
        sql_attr_uint                           = crc32_showstatus
        sql_attr_uint                           = date
        #sql_field_string                       = deflag
        #sql_attr_timestamp                     = ctime
        sql_attr_str2ordinal                    = ctime
        #sql_attr_str2ordinal                   = deflag
        #sql_query_info                         = select * from ls_news_arc
}

source industry
{
        type                                    = mysql
        sql_host                                = 192.168.9.118
        sql_user                                = BhI1Amhg
        sql_pass                                = BhI1Amhg04wwdhdk
        sql_db                                  = X1sNfvYG
        sql_port                                = 3306
        sql_query_pre                           = SET NAMES utf8
        sql_query_pre                           = SET SESSION query_cache_type=OFF
        #sql_query_pre                          = REPLACE INTO sph_counter SELECT 1, MAX(memberid) FROM ls_member_ent_brandinfo
        sql_query                               = select a.memberid,a.brandname,a.jianpin,a.joinregion,b.memberid,b.industry,b.subindustry,b.area,c.id,c.pathname from ls_member_ent_brandinfo as a,ls_member_ent_info as b,ls_class_industry as c where a.memberid=b.memberid and b.industry=c.id
        sql_attr_uint                           = crc32_showstatus
        sql_attr_uint                           = date
        #sql_field_string                       = deflag
        #sql_attr_timestamp                     = ctime
        sql_attr_str2ordinal                    = ctime
        #sql_attr_str2ordinal                   = deflag
        #sql_query_info                         = select * from ls_news_arc
}
source sph_warn_mysql
{
        type                                    = mysql
        sql_host                                = 192.168.9.118
        sql_user                                = BhI1Amhg
        sql_pass                                = BhI1Amhg04wwdhdk
        sql_db                                  = X1sNfvYG
        sql_port                                = 3306
        sql_query_pre                           = SET NAMES utf8
        sql_query                               = select memberid,memberid as mid,brandname,quanpin,jianpin,cindex,orderid,payamount from ls_member_ent_brandinfo

        sql_attr_uint                           = mid
        sql_attr_uint                           = cindex
        sql_attr_uint                           = orderid
        sql_attr_uint                           = payamount
        #sql_query_info                         = SELECT * FROM ls_member_ent_brandinfo WHERE memberid = $memberid
}

index mysql
{
        source                  = mysql
        path                    = /usr/local/coreseek/var/data/mysql
        docinfo                 = extern
        mlock                   = 0
        morphology              = none
        min_word_len            = 1
        html_strip              = 0
        charset_dictpath        = /usr/local/mmseg3/etc/
        #charset_dictpath       = etc/
        charset_type            = zh_cn.utf-8
}

index mysqlstemmed : mysql
{
        source                  = mysqlthrottled
        path                    = /usr/local/coreseek/var/data/mysql
        docinfo                 = extern
        mlock                   = 0
        morphology              = none
        min_word_len            = 1
        html_strip              = 0
        charset_dictpath        = /usr/local/mmseg3/etc/
        #charset_dictpath       = etc/
        charset_type            = zh_cn.utf-8
}

index news
{
        source                  = news
        path                    = /usr/local/coreseek/var/data/news
        docinfo                 = extern
        mlock                   = 0
        morphology              = none
        min_word_len            = 1
        html_strip              = 0
        charset_dictpath        = /usr/local/mmseg3/etc/
        #charset_dictpath       = etc/
        charset_type            = zh_cn.utf-8
}

index industry
{
        source                  = industry
        path                    = /usr/local/coreseek/var/data/industry
        docinfo                 = extern
        mlock                   = 0
        morphology              = none
        min_word_len            = 1
        html_strip              = 0
        charset_dictpath        = /usr/local/mmseg3/etc/
        #charset_dictpath       = etc/
        charset_type            = zh_cn.utf-8
}

index sph_warn_mysql
{
         source                  = sph_warn_mysql
         path                    = /usr/local/coreseek/var/data/sph_warn_mysql
         docinfo                 = extern
         mlock                   = 0
         morphology              = none
         min_word_len            = 1
         html_strip              = 0
         charset_dictpath        = /usr/local/mmseg3/etc/
         #charset_dictpath       = etc/
         charset_type            = zh_cn.utf-8
}


indexer
{
        mem_limit               = 128M
}

searchd
{
    listen                      = 9312
        read_timeout            = 5
        max_children            = 30
        max_matches             = 1000
        seamless_rotate         = 0
        preopen_indexes         = 0
        unlink_old              = 1
        pid_file                = /usr/local/coreseek/var/log/searchd_mysql.pid
        log                     = /usr/local/coreseek/var/log/searchd_mysql.log
        query_log               = /usr/local/coreseek/var/log/query_mysql.log
                                                                                
}