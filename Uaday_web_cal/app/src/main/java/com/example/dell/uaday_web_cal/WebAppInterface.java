package com.example.dell.uaday_web_cal;

import android.content.Context;
import android.util.Log;
import android.widget.Toast;

public class WebAppInterface {
    MainActivity  mainActivity=null;
    private String text="";
    private double value=0.0;
    private String pp="";
    WebAppInterface(Context c)
    {
        mainActivity=(MainActivity)c;
    }

    @android.webkit.JavascriptInterface
    public void showToast(String toast)
    {
        Toast.makeText(mainActivity,toast,Toast.LENGTH_SHORT).show();
    }
    @android.webkit.JavascriptInterface
    public void addNum(String num)
    {
        text=text+num;

    }
    @android.webkit.JavascriptInterface
    public void addOp(String op)
    {
       if(text!="")
       {
           if(op.equals("+"))
           {
               value=value+Double.parseDouble(text);
               pp="+";
           }
           else if(op.equals("-"))
           {
               if(value==0.0)
               {
                   value=value+Double.parseDouble(text);
                   pp="-";
               }
               else
               {
                   value=value-Double.parseDouble(text);
                   pp="-";
               }
           }
           else if(op.equals("*"))
           {
               if(value==0.0)
               {
                   value=value+Double.parseDouble(text);
                   pp="*";
               }
               else
               {
                   value=value*Double.parseDouble(text);
                   pp="*";
               }
           }
           else
           {
               if(value==0.0)
               {
                   value=value+Double.parseDouble(text);
                   pp="/";
               }
               else
               {
                   value=value/Double.parseDouble(text);
                   pp="/";
               }
           }
           text="";
       }
    }
    @android.webkit.JavascriptInterface
    public String getResult()
    {
        double value1=0.0;
        Log.e("jj","hf");
        Log.e("value",Double.toString(value));
        Log.e("text",text);
        if(text!="")
        {
            if(pp.equals("+"))
            {
                value=value+Double.parseDouble(text);
            }
            else if(pp.equals("-"))
            {
                value=value-Double.parseDouble(text);
            }
            else if(pp.equals("*"))
            {
                value=value*Double.parseDouble(text);
            }
            else if(pp.equals("/"))
            {
                value=value/Double.parseDouble(text);
            }
            else
            {
                value=Double.parseDouble(text);
            }
            text="";
            value1=value;
            value=0.0;

        }
        return Double.toString(value1);
    }

}
